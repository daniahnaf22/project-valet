<?php

namespace App\Models;

class Post
{
    public static $blog = [
        [
            'judul' => 'Detective Conan',
            'slug' => 'detective-conan',
            'penulis' => 'Orang Jepang',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dolor veniam impedit nulla eum reiciendis excepturi eius, quod odio expedita quibusdam similique voluptates optio qui quaerat eveniet. Inventore, suscipit nam?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet tempora doloremque mollitia delectus facilis provident quaerat numquam, nihil cumque, commodi aut rem itaque! Distinctio reprehenderit deleniti mollitia magni ut laudantium perferendis eveniet, dicta esse dolorem labore est adipisci repellat pariatur hic iste alias nihil quas cupiditate a! Id aperiam, voluptatibus iste blanditiis maxime culpa quisquam omnis quod quia eum ex reprehenderit consequatur dolore nemo odio error sed, inventore facere, aspernatur non debitis. Eius dolorum error nostrum dicta fugit reprehenderit esse vitae obcaecati illo dolores praesentium, sequi commodi labore deserunt suscipit quaerat tenetur aut ducimus, unde debitis asperiores veniam sint. Reiciendis, accusamus natus. Nostrum incidunt nobis eum itaque deleniti soluta accusantium ex ab enim, qui magnam eveniet recusandae architecto dicta cum reprehenderit veritatis deserunt nihil maxime temporibus. Eos dolorem voluptate incidunt repudiandae deserunt voluptas accusamus error culpa earum facere ad ipsam animi ullam reiciendis quia assumenda eligendi, fugiat atque velit perferendis, magnam repellendus. Libero soluta deserunt delectus quaerat asperiores aliquam, laudantium nisi nam necessitatibus? Excepturi necessitatibus exercitationem deleniti, dolorum hic illo! In excepturi placeat vel animi aut, dolores quo nam reiciendis quia tempora facere beatae non ut quis nobis eius corrupti magni illum obcaecati eos, soluta dignissimos minima nulla. Commodi, possimus?'
        ],
        [
            'judul' => 'One Piece',
            'slug' => 'one-piece',
            'penulis' => 'Echiro Oda',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit animi dolores libero. Maxime error aut rem nulla. Labore eos eaque voluptas unde, earum aperiam a!',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet tempora doloremque mollitia delectus facilis provident quaerat numquam, nihil cumque, commodi aut rem itaque! Distinctio reprehenderit deleniti mollitia magni ut laudantium perferendis eveniet, dicta esse dolorem labore est adipisci repellat pariatur hic iste alias nihil quas cupiditate a! Id aperiam, voluptatibus iste blanditiis maxime culpa quisquam omnis quod quia eum ex reprehenderit consequatur dolore nemo odio error sed, inventore facere, aspernatur non debitis. Eius dolorum error nostrum dicta fugit reprehenderit esse vitae obcaecati illo dolores praesentium, sequi commodi labore deserunt suscipit quaerat tenetur aut ducimus, unde debitis asperiores veniam sint. Reiciendis, accusamus natus. Nostrum incidunt nobis eum itaque deleniti soluta accusantium ex ab enim, qui magnam eveniet recusandae architecto dicta cum reprehenderit veritatis deserunt nihil maxime temporibus. Eos dolorem voluptate incidunt repudiandae deserunt voluptas accusamus error culpa earum facere ad ipsam animi ullam reiciendis quia assumenda eligendi, fugiat atque velit perferendis, magnam repellendus. Libero soluta deserunt delectus quaerat asperiores aliquam, laudantium nisi nam necessitatibus? Excepturi necessitatibus exercitationem deleniti, dolorum hic illo! In excepturi placeat vel animi aut, dolores quo nam reiciendis quia tempora facere beatae non ut quis nobis eius corrupti magni illum obcaecati eos, soluta dignissimos minima nulla. Commodi, possimus?'
        ],
        [
            'judul' => 'Naruto Shipuden',
            'slug' => 'naturo-shipuden',
            'penulis' => 'Masashi Khisimoto',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dolor veniam impedit nulla eum reiciendis excepturi eius, quod odio expedita quibusdam similique voluptates optio qui quaerat eveniet. Inventore, suscipit nam?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet tempora doloremque mollitia delectus facilis provident quaerat numquam, nihil cumque, commodi aut rem itaque! Distinctio reprehenderit deleniti mollitia magni ut laudantium perferendis eveniet, dicta esse dolorem labore est adipisci repellat pariatur hic iste alias nihil quas cupiditate a! Id aperiam, voluptatibus iste blanditiis maxime culpa quisquam omnis quod quia eum ex reprehenderit consequatur dolore nemo odio error sed, inventore facere, aspernatur non debitis. Eius dolorum error nostrum dicta fugit reprehenderit esse vitae obcaecati illo dolores praesentium, sequi commodi labore deserunt suscipit quaerat tenetur aut ducimus, unde debitis asperiores veniam sint. Reiciendis, accusamus natus. Nostrum incidunt nobis eum itaque deleniti soluta accusantium ex ab enim, qui magnam eveniet recusandae architecto dicta cum reprehenderit veritatis deserunt nihil maxime temporibus. Eos dolorem voluptate incidunt repudiandae deserunt voluptas accusamus error culpa earum facere ad ipsam animi ullam reiciendis quia assumenda eligendi, fugiat atque velit perferendis, magnam repellendus. Libero soluta deserunt delectus quaerat asperiores aliquam, laudantium nisi nam necessitatibus? Excepturi necessitatibus exercitationem deleniti, dolorum hic illo! In excepturi placeat vel animi aut, dolores quo nam reiciendis quia tempora facere beatae non ut quis nobis eius corrupti magni illum obcaecati eos, soluta dignissimos minima nulla. Commodi, possimus?'
        ],

    ];

    public static function all()
    {
        return collect(self::$blog);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
