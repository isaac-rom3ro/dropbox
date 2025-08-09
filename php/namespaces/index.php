<?php
    #When creating classes, it will be put in global space
    #Thow an error, if a class, functions, constants have same name as another imported

    // require_once "./entities/CostumerProfile.php";
    require_once "./payment/paddle/Transaction.php";
    require_once "./payment/stripe/Transaction.php";
    
    #namespace -> Used to include the class in virtual folder, created in the class and imported by here
    #Uncaught Error: Class "Transaction" not found
    // var_dump(new Transaction());
    
    #We can use this way -> Prefer this way man
    #(as) Give another name for that class
    use Payment\Paddle\Transaction as PaddleTransaction;
    use Payment\Stripe\Transaction as StripeTransaction;

    #Or this
    #Namespace\Class()
    // var_dump(new Transaction());

    #Using multiple classes from same namespace 
    //use namespace\{Class, Class, Class}

    $paddleTransaction = new PaddleTransaction();
    $stripeTransaction = new StripeTransaction();

    var_dump($paddleTransaction, $stripeTransaction);