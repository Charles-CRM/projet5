<?php
require_once('/app/RecipeManager.php');



namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $connection = ''; // ???
    protected $table = 'recettes';
    protected $primaryKey = 'recettes_id'
    protected $keyType = 'int';
    public $incrementing = true;
    
    protected $with = []; // Pour charger en une fois toutes les infos contenues dans d'autres tables.
    protected $withCount = []; // ???
    
    protected $perPage = 15; // pagination
    
    public $exists = false; // ??? "Indique si le model existe." ???
    public $wasRecentlyCreated = false;
    protected static $resolver;
    protected static $dispatcher;
    protected static $booted = [];
    protected static $globalScopes = [];
    protected static $ignoreOnTouch = [];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    const CREATED_AT = 'created_at'; // Pas besoin ?
    const UPDATED_AT = 'updated_at'; // Pas besoin ?
    
    // public function fill(array $attributes)  ->  permet l'hydratation.
    // public static function on($connection = null)  ->  à écrire avant de commencer à faire des queries ?
    
    // save
    // update
    // push
    // delete
    
    
    
    
    private $_id;
    private $_title;
    private $_rating;
    private $_difficulty;
    private $_preparation_time;
    private $_rest_time;
    private $_cooking_time;
    private $_slices_number;
    private $_publication_state;
    private $_publication_date;
    
    
    // Constructer
    public function __construct(array $datas = []) {
        $this->hydrate($datas);
    }
    
    // Getters
    public function id()                { return $this->_id;                }
    public function title()             { return $this->_title;             }
    public function rating()            { return $this->_rating;            }
    public function difficulty()        { return $this->_difficulty;        }
    public function preparation_time()  { return $this->_preparation_time;  }
    public function rest_time()         { return $this->_rest_time;         }
    public function cooking_time()      { return $this->_cooking_time;      }
    public function slices_number()     { return $this->_slices_number;     }
    public function publication_state() { return $this->_publication_state; }
    public function publication_date()  { return $this->_publication_date;  }
    
    
    // Setters
    public function setId($id) {
        $this->_id = abs((int) $id);
    }
    
    public function setTitle($title) {
        $this->_title = (string) $title;
    }
    
    public function setRating($rating) {
        $this->_rating = abs((float) $rating);
    }
    
    public function setDifficulty($difficulty) {
        $this->_difficulty = abs((float) $difficulty);
    }
    
    public function setPreparation_time($preparationTime) {
        $this->_preparation_time = abs((int) $preparationTime);
    }
    
    public function setRest_time($restTime) {
        $this->_rest_time = abs((int) $restTime);
    }
    
    public function setCooking_time($cookingTime) {
        $this->_cooking_time = abs((int) $cookingTime);
    }
    
    public function setSlices_number($slicesNumber) {
        $this->_slices_number = abs((int) $slicesNumber);
    }
    
    public function setPublication_state($publicationState) {
        $this->_publicationState = (bool) $publicationState;
    }
    
    public function setPublication_date($publicationDate) {
        $this->_publication_date = (string) $publicationDate;
    }


    
    
    
    
}
