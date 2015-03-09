/*
 * WhackAMole Game.
 * Copyright (c) Magnus Löf - 2015-02-12.
 * All rights reserved unless for school purposes.
 */

/* Mole popup speed - Increase this value to increase initial speed of the game.
 * Values could be:
 *   0 for kids aged 3-9
 *   100 for senior citizens
 *   1000 for people aged 10-55
 */
var molePopupSpeed = 1000;


/* Randomiserar och returnerar ett tal mellan min och max */
var newRandom = function random(min, max)
{
    return Math.floor(Math.random() * (max+1 - min) +min);
};

/* Blinks (fades out and in) an element 3 times */
function blinkID(elem)
{
    var i = 0, speed = 200;

    for(i=0; i < 3; i++)
        $(elem).fadeOut(speed).fadeIn(speed);
}

/* Keep score for the mole whacking */
var numMolesWhacked = 0;
/* Keep score for mole misses */
var numMolesMissed = 0;

/**
 * Removes an old mole and adds a new one at a randomized location after a few seconds.
 * Checks if the mole was whacked and writes game status.
 */
var placeRandomMole = function($id)
{
    'use strict';
    var i = 0, j = 0, mole,
        randCol = 0, randRow = 0,
        randTimeout = 0,
        /* The player has 1 second to whack a mole initially, minus molePopupSpeed */
        whackTimeout = 1000;

    /* Hide the mole */
    $($id).hide();
    /* Set status */
    $('#status').html('Status: Finding a new mole...');
    // console.log('Removed a mole');

    /* Timout until adding a new mole is randomized between 3-5 seconds */
    randTimeout = newRandom(3000, 5000);

    /* Set a timeout before adding the new mole */
    setTimeout(function()
    {
        $('#status').html('Status: A new mole is ready for whacking!');
        /* Blink the status a few times */
        blinkID('#status');

        /* Randomisera 2 variablers värden mellan 1 och 3 */
        randCol = newRandom(1, 3);
        randRow = newRandom(1, 3);

        /* Place a new mole at this randomized position in the moletable */
        mole = '#col' + randCol + 'row' + randRow;

        /* Show the new mole */
        $(mole).show();

        /* Remove hidden style for the image: style="visibility: hidden;"
           This was added to the images at start so they wont be shown initially */
        $(mole).attr('style', '');

        // console.log('New mole at loction: ' + 'col' + randCol + ', ' + 'row' + randRow);

    }, randTimeout - molePopupSpeed);

    /* Set a timeout to check if the mole was whacked in 2 seconds (randTimout + 2000) and set status */
    setTimeout(function()
    {
        /* Check if the mole exists after 2 seconds: randTimout + 2000 and set status */
        if( $(mole).is(':hidden') )
        {

            /* Give bonus points if 20 moles have been whacked.
               Decrease the mole popup speed by half */
            if( numMolesWhacked == 20 )
            {
                $('#status').html('Status: You got 10 bonuspoints! Speed decreased by half! - Adding 10 points.');
                blinkID('#status');
                blinkID('#status');
                blinkID('#status');
                /* Also blink the score */
                blinkID('#score');
                blinkID('#score');
                blinkID('#score');

                /* Add 10 to the number of moles whacked */
                numMolesWhacked += 10;

                /* Make the game go half as fast */
                molePopupSpeed = (molePopupSpeed / 2);
            }
            else
                $('#status').html('Status: Good job!, you whacked a mole! - Adding 1 point.');


            /* Add one to the number of moles whacked and show the score */
            numMolesWhacked++;
            $('#score').html('Score: ' + numMolesWhacked);

            /* Make the game go faster (faster popups and timeouts) if the speed is less then then 3000 */
            if( molePopupSpeed < 3000 )
                molePopupSpeed += 300;
        }
        else
        {
            /* Hide the mole */
            $(mole).hide();

            $('#status').html('Status: You did not whack the mole on time! - Removing 1 point.');
            blinkID('#status');

            numMolesWhacked += -1;
            $('#score').html('Score: ' + numMolesWhacked);

            /* Add one to number of moles missed */
            numMolesMissed++;
            /* Too many moles have been missed. End the game */
            if( numMolesMissed == 5 )
            {
                $('#status').html('Status: The game has ended. You did not whack enough moles!.');
                blinkID('#status');
                blinkID('#status');
                blinkID('#status');

                /* Show a button for restarting the game */
                $('#restart').show();
                $('#restart').attr('style', '');

                /* Stop class gameMusic */
                $(".gameMusic").trigger('pause');
                /* Play class endGameMusic */
                $(".endGameMusic").trigger('play');

                return;
            }

            if( numMolesWhacked < 1 )
            {
                $('#status').html('Status: Come on! Whack the moles!!!.');
                blinkID('#status');
            }

            /* Add a new randomly positioned mole after randTimout + whackTimout + 1 seconds minus molePopupSpeed */
            setTimeout(function()
            {
                placeRandomMole(mole);
            }, randTimeout + whackTimeout + 1000 - molePopupSpeed);
        }
    }, randTimeout + whackTimeout - molePopupSpeed);
};

$(document).ready(function()
{
    'use strict';
    var i, j;

    /* Play class gameMusic */
    $(".gameMusic").trigger('play');

    /* Add listeners for 3*3 images */
    for(i=1; i < 4; i++)
        for(j=1; j < 4; j++)
            $('#col' + i + 'row' +j).on('click', function()
            {
                placeRandomMole($(this));
                /* Play class clickSound */
                $(".clickSound").trigger('play');
            });

    /* A button for restarting the game */
    $('#restart').on('click', function()
    {
        /* Set number of moles whacked to 0 and update the scores */
        numMolesWhacked = 0;
        $('#score').html('Score: ' + numMolesWhacked);

        /* Reset the mole popup speed */
        molePopupSpeed = 0;
        /* Reset moles missed */
        numMolesMissed = 0;

        /* Stop the end game music */
        $(".endGameMusic").trigger('pause');
        /* Play class gameMusic */
        $(".gameMusic").trigger('play');

        /* Add a randomly positioned mole initially */
        placeRandomMole("col1row1");
        /* Hide the button after click */
        $('#restart').hide();
    });

    /* Add a randomly positioned mole initially */
    placeRandomMole('#col1row1');
});
