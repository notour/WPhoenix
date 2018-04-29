<?php

namespace tests\units 
{

    require_once dirname(__FILE__) . '/../../utest_const.php';

    use mageekguy\atoum;

    /**
     * Class tested
     */
    require_once CD_PROJECT_PATH . 'interfaces/idb_handler.php';

    class IDBHandler  extends atoum\test
    {
        /**
         * Test the insterface define correctly a traits
         */
        public function testIDBHandler_Traits()
        {
            $traits = \IDBHandler::Traits;

            $this
                ->variable($traits)
                    ->isEqualTo("IDBHandler");
        }
    }
}