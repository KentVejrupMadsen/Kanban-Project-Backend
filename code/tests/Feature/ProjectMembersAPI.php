<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace Tests\Feature;


    /**
     *
     */
    class ProjectMembersAPI
        extends BaseFeature
    {

        public function test_example()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }
    }
?>