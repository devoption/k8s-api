<?php

return [

    /**
     * The DevOption Service Account Token
     * 
     * This token is used to authenticate the DevOption service account with the
     * Kubernetes API. The service account should have cluster-admin permissions
     * to be able to create and manage resources.
     */
    'service_account_token' => env('K8S_SERVICE_ACCOUNT_TOKEN'),

];