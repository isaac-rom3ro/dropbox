<?php
    class StaticClass {
        # Even the class is not static, this  method is
        # So we can call it, without needs to instantiate an object of StaticClass

        # Visibility static function name(params): return {
            # Code Block!
        #}
        public static function sum(int $a, int $b): int {
            return $a + $b;
        }
    }

    # Class::staticMethod();
    echo StaticClass::sum(2, 2);