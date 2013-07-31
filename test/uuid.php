<?php
use php_require\php_uuid\UUID;

$module = new stdClass();

/*
    Now we "require()" the file to test.
*/

require(__DIR__ . "/../index.php");

/*
    Now we test it.
*/

describe("php-uuid", function () {

    describe("uuid->generate()", function () {
        it("should return", function () {
            $uuid = new UUID();
            assert(strlen($uuid->generate(UUID::UUID_TIME, UUID::FMT_STRING)) === 36);
        });
    });
});
