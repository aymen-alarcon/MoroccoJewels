<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Permissions extends Seeder
{
    public function run(): void
    {
        $permissions = [
            ['name' => 'dashboard.view', 'description' => 'View dashboard'],
            ['name' => 'reports.view', 'description' => 'View reports'],
            ['name' => 'category.view', 'description' => 'View categories'],
            ['name' => 'category.create', 'description' => 'Create categories'],
            ['name' => 'category.update', 'description' => 'Update categories'],
            ['name' => 'category.delete', 'description' => 'Delete categories'],
            ['name' => 'product.view', 'description' => 'View products'],
            ['name' => 'product.create', 'description' => 'Create products'],
            ['name' => 'product.update', 'description' => 'Update products'],
            ['name' => 'product.delete', 'description' => 'Delete products'],
            ['name' => 'inventory.manage', 'description' => 'Manage stock'],
            ['name' => 'media.manage',     'description' => 'Manage product images'],
            ['name' => 'cart.add',    'description' => 'Add to cart'],
            ['name' => 'cart.view',   'description' => 'View cart'],
            ['name' => 'cart.update', 'description' => 'Update cart'],
            ['name' => 'cart.remove', 'description' => 'Remove from cart'],
            ['name' => 'checkout.create', 'description' => 'Start checkout'],
            ['name' => 'order.view',   'description' => 'View orders'],
            ['name' => 'order.create', 'description' => 'Create orders'],
            ['name' => 'order.update', 'description' => 'Update orders'],
            ['name' => 'order.refund', 'description' => 'Refund orders'],
            ['name' => 'user.view',   'description' => 'View users'],
            ['name' => 'user.create', 'description' => 'Create users'],
            ['name' => 'user.update', 'description' => 'Update users'],
            ['name' => 'user.delete', 'description' => 'Delete users'],
            ['name' => 'role.view',   'description' => 'View roles'],
            ['name' => 'role.create', 'description' => 'Create roles'],
            ['name' => 'role.update', 'description' => 'Update roles'],
            ['name' => 'role.delete', 'description' => 'Delete roles'],
            ['name' => 'permission.view', 'description' => 'View permissions'],
            ['name' => 'settings.manage', 'description' => 'Manage site settings'],
        ];

        foreach ($permissions as $permission) {
            DB::table('permissions')->insert($permission);
        }
    }
}