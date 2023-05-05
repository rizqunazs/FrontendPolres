<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait FillableInputTrait
{
  protected $fillableMapPrefix;
  protected $fillableMap;

  public function __construct()
  {
    parent::__construct();
    $this->fillableMapPrefix = $this->fillableMapPrefix ?? $this->getTable();
    $this->fillableMap = $this->fillableMap ?? $this->getDefaultFillableMap();
  }

  public function getDefaultFillableMap()
  {
    $arr = [];
    foreach ($this->getFillable() as $key => $value) {
      $arr[$value] = $this->fillableMapPrefix . '_' . $value;
    }
    return $arr;
  }

  public function setFillableMap(array $mapAttr)
  {
    $this->fillableMap = $mapAttr;
  }

  public function setFillableMapPrefix(String $prefix)
  {
    $this->fillableMapPrefix = $prefix;
    $arr = $this->getDefaultFillableMap();
    $this->setFillableMap($arr);
  }

  public function getFillableMap()
  {
    return $this->fillableMap;
  }

  public static function createFromRequest(Request $request)
  {
    $instance = new self();
    $instance->updateFromRequest($request);

    return $instance;
  }

  public function updateFromRequest(Request $request)
  {
    $map = $this->getFillableMap();

    foreach ($map as $attribute => $input) {
      if ($this->hasFillableAttribute($attribute) && $request->has($input)) {
        $this->setAttribute($attribute, $request->input($input));
      }
    }
    return $this;
  }

  public function hasFillableAttribute($attribute)
  {
    if (in_array($attribute, $this->getFillable())) {
      return true;
    }

    return false;
  }
}
