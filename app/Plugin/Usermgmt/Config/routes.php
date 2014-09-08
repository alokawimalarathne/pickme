<?php


// Routes for standard actions

Router::connect('/login', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'logout'));
Router::connect('/forgotPassword', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'forgotPassword'));
Router::connect('/activatePassword/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'activatePassword'));
Router::connect('/register', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'register'));
Router::connect('/changePassword', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'changePassword'));
Router::connect('/changeUserPassword/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'changeUserPassword'));
Router::connect('/addUser', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'addUser'));
Router::connect('/editUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'editUser'));
Router::connect('/deleteUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'deleteUser'));
Router::connect('/viewUser/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'viewUser'));
Router::connect('/userVerification/*', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'userVerification'));
Router::connect('/allUsers', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'index'));
Router::connect('/dashboard', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'dashboard'));
Router::connect('/permissions', array('plugin' => 'usermgmt', 'controller' => 'user_group_permissions', 'action' => 'index'));
Router::connect('/update_permission', array('plugin' => 'usermgmt', 'controller' => 'user_group_permissions', 'action' => 'update'));
Router::connect('/accessDenied', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'accessDenied'));
Router::connect('/myprofile', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'myprofile'));
Router::connect('/allGroups', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'index'));
Router::connect('/addGroup', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'addGroup'));
Router::connect('/editGroup/*', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'editGroup'));
Router::connect('/deleteGroup/*', array('plugin' => 'usermgmt', 'controller' => 'user_groups', 'action' => 'deleteGroup'));
Router::connect('/emailVerification', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'emailVerification'));


