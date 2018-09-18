/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// var $ = require('jquery');

import axios from 'axios';

function deleteButtonClicked(event)
{
    const itemId = event.target.getAttribute('data-id');
    console.log(itemId);

    axios.delete(togglePath)
        .then(response => location.reload());
}

let deleteButtons = document.querySelectorAll('.deleteButton');
deleteButtons.forEach(button => button.addEventListener('click', deleteButtonClicked));


function checkButtonClicked(event)
{
    const itemId = event.target.getAttribute('data-id');
    console.log(itemId);

    axios.post('/todo/item/' + itemId + '/toggleIsDone')
        .then(response => location.reload());
}

let checkButtons = document.querySelectorAll('.checkButton');
checkButtons.forEach(button => button.addEventListener('click', checkButtonClicked));