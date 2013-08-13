<?php
use php_require\php_uuid\UUID;

$module = new stdClass();

/*
    Now we "require()" the file to test.
*/

$require = function () {};

require(__DIR__ . "/../lib/exception.php");
require(__DIR__ . "/../lib/clock.php");
require(__DIR__ . "/../index.php");

$uuid = $module->exports;

/*
    Now we test it.
*/

describe("php-uuid", function () use ($uuid){

    it("should return [UUID1] from no arguments", function () use ($uuid) {
        assert(strlen($uuid()) === 36);
    });

    it("should return [UUID1]", function () use ($uuid) {
        assert(strlen($uuid(1)) === 36);
    });

    it("should return [null]", function () use ($uuid) {
        assert(strlen($uuid(2)) === 0);
    });

    it("should return [UUID3]", function () use ($uuid) {
        assert(strlen($uuid(3, "nodestring", "0787986e-fa45-11e2-b5a0-000000000000")) === 36);
    });

    it("should return [UUID4]", function () use ($uuid) {
        assert(strlen($uuid(4)) === 36);
    });

    it("should return [UUID5]", function () use ($uuid) {
        assert(strlen($uuid(5, "nodestring", "0787986e-fa45-11e2-b5a0-000000000000")) === 36);
    });

    it("should return [0787986e-fa45-11e2-b5a0-000000000000]", function () use ($uuid) {
        $newUuid = UUID::import("0787986e-fa45-11e2-b5a0-000000000000");
        assert($newUuid->string === "0787986e-fa45-11e2-b5a0-000000000000");
    });
});
