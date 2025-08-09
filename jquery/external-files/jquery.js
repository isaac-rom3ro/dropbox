// Document ready? ok so executes it
$(function() {
    // Does not work with dinamically added elements
    // $("body").on("click", "#checkbox", function() {
    //     alert("Hello World!");
    // });

    
    // Attempt more modern but needs to be added after the declaration of the element itself
    // $("#checkbox").on("change", function() {
    //     alert("Hello World!");
    // });

    // Works well dinamically
    $("body").on("change", "#checkbox", function() {
        alert("Hello World!");
    });

    let checkbox_input = `<input type="checkbox" id="checkbox" name="checkbox">`;

    $("body").append(checkbox_input);
});