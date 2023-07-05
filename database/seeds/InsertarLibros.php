<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarLibros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert(array(
            [
                'nombre' => 'La magia del arte',
                'codigo' => 'abc1',
                'autor' => 'Raphael Garnier',
                'precio' => 16990,
                'image' => 'https://contrapunto.cl/27218/la-magia-del-arte.jpg',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'La historia del arte',
                'codigo' => 'abc2',
                'autor' => 'E.H. Gombrich',
                'precio' => 12990,
                'image' => 'https://imagessl2.casadellibro.com/a/l/t5/12/9781838666712.jpg',
                'categoria_id' => 1
            ],
            [
                'nombre' => 'El libro de la ciencia',
                'codigo' => 'abc3',
                'autor' => 'Peter Handke',
                'precio' => 29990,
                'image' => 'https://images.cdn2.buscalibre.com/fit-in/360x360/5f/c2/5fc208b378893cdfc4ea59550aa7ddde.jpg',
                'categoria_id' => 2
            ],
            [
                'nombre' => 'El libro de la fisica',
                'codigo' => 'abc4',
                'autor' => 'Colin Stuart',
                'precio' => 25990,
                'image' => 'https://contrapunto.cl/10419/libro-de-la-fisica-el.jpg',
                'categoria_id' => 2
            ],
            [
                'nombre' => 'Ciudad sin estrellas',
                'codigo' => 'abc5',
                'autor' => 'Montse de paz',
                'precio' => 12990,
                'image' => 'https://i.blogs.es/4001b9/ciudad-sin-estrellas_9788445078136/450_1000.jpg',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'Panteón',
                'codigo' => 'abc6',
                'autor' => 'Carlos Sisí',
                'precio' => 22990,
                'image' => 'https://i.blogs.es/548eff/panteon_9788445001172/450_1000.jpg',
                'categoria_id' => 3
            ],
            [
                'nombre' => 'Patas de alambre',
                'codigo' => 'abc7',
                'autor' => 'Isabel Keats',
                'precio' => 15990,
                'image' => 'https://i.blogs.es/c5f378/novelas-portada-3/450_1000.jpg',
                'categoria_id' => 4
            ],
            [
                'nombre' => 'En tus zapatos',
                'codigo' => 'abc8',
                'autor' => 'Beth Oleary',
                'precio' => 19990,
                'image' => 'https://whitepaperby.com/wp-content/uploads/Portada-En-tus-zapatos-678x1024.jpg',
                'categoria_id' => 4
            ],
            [
                'nombre' => 'Yoga para todos',
                'codigo' => 'abc9',
                'autor' => 'Indra Devi',
                'precio' => 21990,
                'image' => 'https://data.livriz.com/media/MediaSpace/F9AFB48D-741D-4834-B760-F59344EEFF34/4/b478d697-8043-41f9-b36a-1acbf577e7fa/mediamodifiere42203e002a.jpg',
                'categoria_id' => 5
            ],
            [
                'nombre' => 'La felicidad es inutil',
                'codigo' => 'abc10',
                'autor' => 'Clovis de Barros Filho',
                'precio' => 19990,
                'image' => 'https://data.livriz.com/media/MediaSpace/F9AFB48D-741D-4834-B760-F59344EEFF34/4/18a2d4ca-dc5e-482d-bed7-492b5e01b006/mediamodifier0c2006e5ac1.jpg',
                'categoria_id' => 5
            ]
        ));
    }
}
