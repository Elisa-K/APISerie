<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('series')->insert([
		    'title' => 'Jessica Jones',
		    'synopsis' => 'La super-héroïne Jessica Jones s\'est reconvertie en détective privé. Hantée par un événement traumatisant de son passé, elle se cache à New York et se contente de sordides affaires d\'adultère. Une nouvelle enquête va faire resurgir de vieux démons...',
		    'picture_url' => 'https://ia.media-imdb.com/images/M/MV5BMTkxMDk5NTQ3MF5BMl5BanBnXkFtZTgwNzg3ODU3NDM@._V1_SX300.jpg',
		    'season_number' => '2',
	    ]);

	    DB::table('series')->insert([
		    'title' => 'Game of Thrones',
		    'synopsis' => 'Il y a très longtemps, à une époque oubliée, une force a détruit l\'équilibre des saisons. Dans un pays où l\'été peut durer plusieurs années et l\'hiver toute une vie, des forces sinistres et surnaturelles se pressent aux portes du Royaume des Sept Couronnes. La confrérie de la Garde de Nuit, protégeant le Royaume de toute créature pouvant provenir d\'au-delà du Mur protecteur, n\'a plus les ressources nécessaires pour assurer la sécurité de tous. Après un été de dix années, un hiver rigoureux s\'abat sur le Royaume avec la promesse d\'un avenir des plus sombres. Pendant ce temps, complots et rivalités se jouent sur le continent pour s\'emparer du Trône de Fer, le symbole du pouvoir absolu.',
		    'picture_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjE3NTQ1NDg1Ml5BMl5BanBnXkFtZTgwNzY2NDA0MjI@._V1_SX300.jpg',
		    'season_number' => '8',
	    ]);

	    DB::table('series')->insert([
		    'title' => 'Westworld',
		    'synopsis' => 'A Westworld, un parc d\'attractions dernier cri, les visiteurs paient des fortunes pour revivre le frisson de la conquête de l\'Ouest. Dolores, Teddy et bien d\'autres sont des androïdes à apparence humaine créés pour donner l\'illusion et offrir du dépaysement aux clients. Pour ces derniers, Westworld est l\'occasion de laisser libre-cours à leurs fantasmes. Cet univers bien huilé est mis en péril lorsqu\'à la suite d\'une mise à jour, quelques robots comment à adopter des comportements imprévisibles, voire erratiques. En coulisses, l\'équipe, qui tire les ficelles de ce monde alternatif, s\'inquiète de ces incidents de plus en plus nombreux. Les enjeux du programme Westworld étant énormes, la Direction ne peut se permettre une mauvaise publicité qui ferait fuir ses clients. Que se passe-t-il réellement avec les androïdes ré-encodés ?',
		    'picture_url' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTEyODk5NTc2MjNeQTJeQWpwZ15BbWU4MDQ5NTgwOTkx._V1_SX300.jpg',
		    'season_number' => '2',
	    ]);

	    DB::table('series')->insert([
		    'title' => 'Brooklynn Nine Nine',
		    'synopsis' => 'Jake Peralta, an immature but talented NYPD detective in Brooklyn\'s 99th Precinct, comes into immediate conflict with his new commanding officer, the serious and stern Captain Ray Holt.',
		    'picture_url' => 'https://ia.media-imdb.com/images/M/MV5BNDc3NzQxODAwOV5BMl5BanBnXkFtZTgwODkwMjU2MzI@._V1_SX300.jpg',
		    'season_number' => '5',
	    ]);

	    DB::table('series')->insert([
		    'title' => 'How I Met Your Mother',
		    'synopsis' => 'A father recounts to his children, through a series of flashbacks, the journey he and his four best friends took leading up to him meeting their mother.',
		    'picture_url' => 'https://ia.media-imdb.com/images/M/MV5BMTA5MzAzNTcyNjZeQTJeQWpwZ15BbWU3MDUyMzE1MTk@._V1_SX300.jpg',
		    'season_number' => '9',
	    ]);
    }
}
