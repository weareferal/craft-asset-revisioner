<?php

namespace weareferal\assetversioner\models;

use weareferal\assetversioner\AssetVersioner;

use Craft;
use craft\base\Model;
class Settings extends Model
{
    public $keystoreBackend = 'database';

    public function rules()
    {
        return [
            [['keystoreBackend',], 'string'],
            [['keystoreBackend',], 'required'],
        ];
    }
}