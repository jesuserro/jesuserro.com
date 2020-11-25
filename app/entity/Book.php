<?php
namespace App\Entity;
/**
 * Book class
 * 
 * Tomado de inc/samples/Factory_Static.php
 * @see https://carlalexander.ca/static-factory-method-pattern-wordpress/
 * @see https://carlalexander.ca/static-keyword-wordpress/
 * @see https://stackoverflow.com/questions/1699796/best-way-to-do-multiple-constructors-in-php
 */
abstract class Book
{
    /**
     * Datos de entrada para el libro 
     *
     * @var mixed
     */
    private $_source; // AAWP_Template_Handler o WP_POST

    /**
     * The Libro's ID, WordPress post ID.
     *
     * @var integer
     */
    private $_id;
 
    /**
     * The ASIN of the product.
     *
     * @var string
     */
    private $_asin;

    /**
     * The titulo del libro.
     *
     * @var string
     */
    private $_titulo;
 
    /**
     * The type of the post.
     *
     * @var string
     */
    private $_post_type;

    /**
     * POD correspondiente al libro
     *
     * @var object
     */
    private $_pod;

    /**
     * Post's reviews
     *
     * @var array
     */
    private $_reviews;


    /**
     * Params sql (order) para capturar datos
     *
     * @var array
     */
    private $_params = [ 'orderby' => 'post_date DESC' ];

    /**
     * Libro url
     *
     * @var string
     */
    private $_url;

    /**
     * Libro portada
     *
     * @var string
     */
    private $_portada_src;

    /**
     * Descripción del libro por la editorial
     *
     * @var string
     */
    private $_sinopsis;

    /**
     * Autores del libro
     *
     * @var array
     */
    private $_autores;

    /**
     * Géneros del libro
     *
     * @var array
     */
    private $_generos;

    /**
     * Notas del libro
     *
     * @var array
     */
    private $_notas;

    /**
     * Categorías del libro
     *
     * @var array
     */
    private $_categorias;

    /**
     * Tags del libro
     *
     * @var array
     */
    private $_tags;

    /**
     * URL de la editorial
     *
     * @var string
     */
    private $_editorial_url;

    /**
     * Nombre de la editorial
     *
     * @var string
     */
    private $_editorial_nombre;

    /**
     * Fecha de publicación del libro
     *
     * @var date
     */
    private $_fecha_publicacion;

    /**
     * Texto del formato del libro
     *
     * @var string
     */
    private $_formato_texto;

    /**
     * Icono del formato del libro
     *
     * @var string
     */
    private $formato_icon;

    /**
     * Número de páginas del libro
     *
     * @var integer
     */
    private $_paginas;

    /**
     * Idioma
     *
     * @var string
     */
    private $_idioma;

    /**
     * Goodreads url de la ficha del libro
     *
     * @var string
     */
    private $_goodreads_url;

    /**
     * Estado del libro: por leer, leído, siguiente, cerrado, etc.
     *
     * @var object
     */
    private $_estado;

    /**
     * Fecha del post Wordpress de este libro
     *
     * @var date
     */
    private $_post_date;

    /**
     * Mi puntuación del libro basada en una reseña (Observer pattern here)
     *
     * @var double
     */
    private $_rating;

 
    /**
     * Constructor.
     *
     * Partes comunes a todo tipo de entrada
     */
    public function __construct( $object )
    {
        $this->_source = $object;
        $this->post_type = get_post_type(); // page (AAWP_Template_Handler) o libro (WP_POST)
    }

    function __call($method, $params) 
    {
        $var = lcfirst(substr($method, 3));
   
        if (strncasecmp($method, "get", 3) === 0) {
            return $this->$var;
        }
        if (strncasecmp($method, "set", 3) === 0) {
            $this->$var = $params[0];
        }
    }

    public function get_books_by_category_id($term_id)
    {
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'libro',
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'terms' => $term_id
                )
            )
        );
        return get_posts($args);
    }

    public function get_books_by_genero_id($term_id)
    {
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'libro',
            'tax_query' => array(
                array(
                    'taxonomy' => 'genero',
                    'terms' => $term_id
                )
            )
        );
        return get_posts($args);
    }

    public function get_books_by_tag_id($term_id)
    {
        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'libro',
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_tag',
                    'terms' => $term_id
                )
            )
        );
        return get_posts($args);
    }


    /**
     * Caja Amazon class Libros
     * Captura las últimas reviews y coge los asins y los ids del libro correspondiente 
     *
     * @param string[] $input
     * @return string[ string $asins, string $ids ]
     */
    public function get_libros_asins($libros)
    {
        $asins = $ids = '';
        if( ! empty( $libros ) ){
            foreach ( $libros as $libro ){
                if(empty($libro->asin)){
                    continue;
                }
                $asins .= $libro->asin.',';
                $ids .= $libro->ID.',';
            }
            
            // Remove duplicate ids 
            $asins = implode(',', array_unique(explode(',', $asins)));
            $ids = implode(',', array_unique(explode(',', $ids)));

            // and remove last comma
            $asins = rtrim($asins,',');
            $ids = rtrim($ids,',');
        }

        return [
            $asins, 
            $ids
        ];
    }

}

