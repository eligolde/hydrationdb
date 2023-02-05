// this is the form in form.php -
const waterform = document.querySelector('#waterform');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const formform = document.querySelector('#formform');
// show the DIV if it is hidden
formform.style.display = 'block';

// event handler
waterform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(waterform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        formform.style.display = 'none';
        response_content.innerHTML =
        "<p class='announce'>" + data + "</p>" +
        "<p class='formtext'><a href='form.php'>Return to the form</a></p>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
};
