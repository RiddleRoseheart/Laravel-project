<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ['name' => 'Heart Of The Sun Warrior', 
            'description' => 'After finishing the first book of the series, I was thinking how the sequel will exceed its perfection. Lets not forget there was no cliffhanger at the end if you dont count the unresolved love triangle.

            But second book of the duology exceeded my expectations and its even better than the first book. There are so many epic moments including surprising family reunions, dragons cameo, bloodthirsty fight against the phoenix and eerie, frightening war against the army of death.
            
            The love triangle between Xingyin-Liwei- Wenzhi is more powerful and reasonable. At the first book, things heated a little instantly and we couldnt feel true intimacy between characters. But thankfully the author solved this problem at second round. Wenzhi is so adamant to make his wrongdoings right by giving his full protection and working as devoted ally. Liwei already confronts with his parents to choose Xingyin over them.', 
            'rating' => 5, 
            'image' => 'product_images/0pXlGe6WZ8FWnZdmxC5uVSpWiWcN2poE8o760yCt.jpg'],

            ['name' => 'These Violent Delights', 'description' => 'Before you get too excited, that was practically the only pithy line in the entire book. I thought I was getting an exciting gangster retelling of Romeo and Juliet with some fantasy elements. Instead, the writing almost did me in.

            In 1920s Shanghai, rival gangs the Scarlets and the White Flowers are engaged in a blood feud. Their young heirs Juliette Cai and Roma Montagov used to be secret lovers, until Roma betrayed Juliette. Now they are sworn enemies. When rumors of a monster reaches their ears, and dead bodies start piling up around the city with their throats torn out, they know they must act. But can they put aside their differences to save their people, or will they lose everything they hold dear?
            
            The premise sounds so good, right? And did I mention its set in Shanghai, the place of my birth and early years, one of my favorite cities in the world to visit? But even the scintillating setting and the storys numerous references to its beloved landmarks and delicious food could not save it.', 
            'rating' => 4, 'image' => 'product_images/a8dK5XwM4Tt8QtI2X96CYhg9hlcEepNJbTplbcoc.jpg'],
            
            ['name' => 'Song of Silver, Flame Like Night', 'description' => 'This book brought me onto a roller-coaster of emotions with a great start, a mediocre medium, and an excellant ending. I rarely change my rating as quickly as this: at the 50% mark, I was convinced that this was going to be a 2-star-read, but the last action sequence blew my mind, and now were here, with a 3.75/5 rounded down (because the ending left me a little disappointed).

            The book started out smoothly: we were introduced to our main characters, Lan and Zen, who I quickly fell in love with. I love their dynamic, and how they balance each other. The slowburn is exquisite, and I loved seeing how they came to trust and to lean on each other.
            
            However, the middle bit of this book was incredibly tedious as the actions were quite repetitive. I honestly didnt know that this book is 500-page-long (which is a lot for a first book of a YA Fantasy series), and I think that a big chunk of it could have been cut off or condensed. Nevertheless, I was really getting into the tension around the mark.', 
            'rating' => 7, 'image' => 'product_images/uL1dT67gpI8iNvSxoCWqUO8MXGaAEYKDQvzo4psQ.jpg'],
            
            ['name' => 'A Magic Steeped in Poison', 
            'description' => 'the element that really sells this story is the magic in the ancient chinese art of tea brewing. i loved how everything in this book revolves around tea - it connects the characters through magic bonds, it provides the MC with a way to help her family through a competition, and it serves as the opposition as tea is being poisoned. tea is the life and heart of this novel. it was very cool to not only read about ancient chinese customs around tea making, but also traditional chinese medicine.

            the thing that prevented me from going “oh, i quite liked this” to “i loved this” is how formulaic the story is. i guess for a debut, i really shouldnt be so critical of the narrative structure because its not terrible, but because this follows the set-up of any basic YA fantasy, i never really felt like the stakes were high or got super emotionally invested in the story/characters.', 
            'rating' => 9, 'image' => 'product_images/oEivz1hePGTLHYvf15VY98m4lmlMpyWputxHC7PB.jpg'],
            
            ['name' => 'A Study in Drowning', 'description' => 'There is a lot going on in A Study in Drowning. Its about institutional sexism in academia; about how young women are simultaneously treated as too insipid and frivolous to be of any consequence and yet also held responsible for the predation of the men who demand power over them. Its about stories and the relationship between author and reader; about who really owns a story and decides what it means. Its about all the ways your voice can be taken from you - both by others and eaten away at within yourself - and what it takes to get it back, if you can.
            All of this is wrapped within a Dark Academia tale of mystery and romance (of the academic rivals variety) in a rotting old house on a cliff, intertwined with themes of the disconnect between religious, superstitious folklore and academic agnosticism. This book will have you questioning perceptions of reality and not knowing who or what to believe.
            And all of it works so beautifully. A seamless blend of narrative, characters I absolutely loved, mysteries to unravel, and an ambiguously fantastical setting that you will question again and again. I loved this book so very much.', 
            'rating' => 10, 'image' => 'product_images/KR4hKQuJeOZUuI9vFofM5u5G3ppvgPnaq7I7HQyl.jpg'],
            
            ['name' => 'The Dead Romantics', 'description' => 'oh my fucking gawwwd!! i didnt think id love this book as much as i do. once i cracked open this book at the crack ass of dawn i couldnt stop reading. personally Ive never read anything like this before. i didnt know i could cry tears of joy to this extent. the high i left reading this book felt like my own personal brand of heroin (sorry for the twilight reference, it just came out of me unexpectedly) this might be the best book ive read this year so far.

            so long sorry short this book is about this very much alive woman whos a ghostwriter that doesnt believe in love anymore and her editor who is an actual ghost that believes in love but doesnt think he deserves it. after her father dies she goes back to her hometown and this dude pops up out of no where and they both think its to help her finish her manuscript. they slowly form feelings for one another but the big question is: how can she continue loving a ghost?
            
            now this book had me second guessing everything i knew the entire way through. i really couldnt predict shit for the life of me. is it a romance so that does equal 🟰 happily ever after but even knowing that i thought id have to come to terms with a bittersweet ending. and i feel like if the author can make me second guess literally everything i know about the romance genre then that is a job well done.', 
            'rating' => 2, 'image' => 'product_images/JrhqFV5zsRo2hXxMna92wB1kXJmgSzlwzPf4yVdA.jpg'],
           
        ];
 
        foreach ($books as $book) {
            Product::create($book);
        }
    }
}
