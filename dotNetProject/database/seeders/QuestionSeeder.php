<?php

namespace Database\Seeders;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create(['category_id' => CategorySeeder::$userContributionsId, 'question' => 'Can I submit my own book reviews?', 'answer' => 'Currently, only the admin, me, has the capability to post book reviews. Users are welcome to explore and enjoy the existing reviews.']);
        Question::create(['category_id' => CategorySeeder::$platformUpdatesId, 'question' => 'How often are new reviews added to the platform?', 'answer' => 'I regularly update the platform with new book reviews. Usually I add 7 to 10 review per month! Keep checking back for the latest additions :).']);
        Question::create(['category_id' => CategorySeeder::$userContributionsId, 'question' => 'Is there a way to suggest a book for review?', 'answer' => 'At the moment, the platform does not support user suggestions for book reviews. However, feel free to enjoy the existing reviews and discover new books.']);
        Question::create(['category_id' => CategorySeeder::$reviewPoliciesContentId, 'question' => 'What genres of books are covered in the reviews?', 'answer' => 'The platform aims to cover a diverse range of book genres, including but not limited to fiction, non-fiction, fantasy, romance, and more. My favorite genre are Fantasy and romance so you might see more of them tho.']);
        Question::create(['category_id' => CategorySeeder::$reviewPoliciesContentId, 'question' => 'Do you receive payment or ARCs (Advanced Reader Copies) in exchange for reviews?', 'answer' => 'Yes, I do receive some books as ARCs or, in some cases, receive compensation for certain reviews. It is important to note that regardless of how I obtain a book, I always ensure transparency in my reviews. If a book has been provided for free or if I have received compensation, I make it explicit in the review. Transparency and honesty are fundamental principles in my approach to reviewing books.']);
    }
}
