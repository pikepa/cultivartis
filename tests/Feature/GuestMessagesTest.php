<?php

it('has guestmessages page', function () {
    $response = $this->get('/messageus');

    $response->assertStatus(200);
});
