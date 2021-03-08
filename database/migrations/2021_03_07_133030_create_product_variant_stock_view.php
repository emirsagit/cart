<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class CreateProductVariantStockView extends Migration
{
    public function up()
    {
        DB::statement(
            'CREATE OR REPLACE VIEW product_variant_stock_view AS 
                SELECT 
                    product_variants.product_id AS product_id,
                    product_variants.id AS product_variant_id,
                    COALESCE(SUM(stocks.quantity) - COALESCE(SUM(product_variant_order.quantity) , 0), 0) as stock,
                    case when COALESCE(SUM(stocks.quantity) - COALESCE(SUM(product_variant_order.quantity) , 0), 0) > 0
                        then true
                        else false
                    end in_stock
                FROM product_variants
                LEFT JOIN(
                    SELECT
                        stocks.product_variant_id as id,
                        SUM(stocks.quantity) as quantity
                    FROM stocks
                    GROUP BY stocks.product_variant_id
                ) AS stocks USING (id)
                LEFT JOIN (
                    SELECT
                        product_variant_order.product_variant_id AS id,
                        SUM(product_variant_order.quantity) as quantity
                    FROM product_variant_order
                    GROUP BY product_variant_order.product_variant_id
                ) AS product_variant_order USING (id)
            GROUP BY product_variants.id'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW product_variant_stock_view');
    }
}

