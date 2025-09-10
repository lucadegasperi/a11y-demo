<?php

it('may welcome the user', function () {
    $page = visit('/');

    $page->assertNoAccessibilityIssues(0);

});
