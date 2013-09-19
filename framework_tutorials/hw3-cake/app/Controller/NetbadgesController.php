<?php
App::uses('AppController', 'Controller');
/**
 * Netbadges Controller
 *
 */
class NetbadgesController extends AppController {

    public function isAuthorized($user) {
        // Only admins can access this table
        if ( $user['role'] != 'admin' ) {
            $this->Session->setFlash(__('Only admins may access authentications'));
            return false;
        }
        return true;
    }
}
