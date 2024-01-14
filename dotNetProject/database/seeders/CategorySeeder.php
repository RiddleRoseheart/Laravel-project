<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static $userContributionsId;
    public static $platformUpdatesId;
    public static $reviewPoliciesContentId;

    public function run()
    {
        self::$reviewPoliciesContentId = Category::create(['name' => 'Review Policies & Content'])->id;
        self::$userContributionsId = Category::create(['name' => 'User Contributions or Book Submissions'])->id;
        self::$platformUpdatesId = Category::create(['name' => 'Platform Updates'])->id;

    }
}
