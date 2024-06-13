<?php

namespace Robwittman\Shopify\Storage;

interface PersistentStorageInterface
{
    public function get($key);

    public function set($key, $value);
}
