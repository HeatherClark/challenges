<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /* 
              Using your advanced knowledge of cards and arrays, Create a game of Blackjack
              Rules:
             	at any given time there will only be 2 players. the dealer and player one.
             	4 cards will be dealt out each round, 2 to the dealer and 2 to the player
             	if the amount in the players hand is less than or equal to the amount in the dealer hand
             		you must get a hit (draw a card)
             	if a player hits and the amount he has goes over 21, he has BUSTED and the dealer won that round
             	if the player ever reaches an amount greater than the dealers he should stay; then it will be 
             	    the dealers turn.
             	The dealer must draw until he reaches an amount greater than the player or until he has BUST
             	Subtract $100 from the players bank every time they lose
             	Add $200 to the players bank every time they win
             	Player starts with $1000 in the bank account
             	Aces can either be an 11 or 1
             	
             	the game will continue as long as there are enough cards in the deck OR the player runs out of money

             	Output:
		         	How many games were played?
		         	Who won the game?
		         	Which round did the player's bank reach half way?
		         	How many times did the player get blackjack ?

             	Extra Credit && Prize =]

             		Create a function called countCards and enable it for the player NOT the dealer
             		This function must analyze the deck and determine if the player should draw again
             		even if the amount in his hand is greater than the dealer.
             		This would be very useful lets say if the dealer has a sum of 9 on the table
             		You might have two 6's (amount of 12). Should you hit again? 
             		More than likely, because chance is the dealer can beat your 12

             	Winner will be determined by whoever has successfully implemented this AND has the best logic
            */
            function createDeck() {
                $suits = array ("clubs", "diamonds", "hearts", "spades");
                $faces = array (
                    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                    "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
            }
            
            $deck = createDeck();
               $num_players = 2;
               $num_cards_in_deck = count($deck);
               $num_cards_to_give_each_player = $num_cards_in_deck / $num_players; 

          
            shuffle($deck);
            $card = array_shift($deck);
            echo $card['face'] . ' of ' . $card['suit'];
            
              
            function dealCards(&$deck, $number_of_cards = 0) {
                $playerCards = array(); 
            }
             
            $hands = array(1 => array(), 2=>array());

            for ($i = 0; $i < 2; $i++) {
                $hands[1][] = implode(" of ", array_shift($deck));
                $hands[2][] = implode(" of ", array_shift($deck));
            }
            

    ?>

    </body>
</html>
