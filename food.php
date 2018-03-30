<!DOCTYPE html>
<html>
<head>
    <?php $title = 'Food'; include 'inc/head.php'; ?>
</head>
<body>
    <div class="container">
        <?php include 'inc/header.php'; ?>

        <main class="menu">
            <h2>Menu</h2>

            <?php
                $sections = array (
                    array(
                        'title' => 'Appetizers',
                        'description' => '',
                        'items' =>  array(
                            array (
                                'name' => 'Chicken Wings',
                                'price' => '6.00',
                                'description' => 'Plain, mild, medium, or hot. Ranch or blue cheese dressing on request.'
                            ),
                            array (
                                'name' => 'Potato Skins',
                                'price' => '6.00',
                                'description' => 'With cheese, bacon, and green onion. Sour cream on request.'
                            ),
                            array (
                                'name' => 'Mozarella Sticks',
                                'price' => '6.00',
                                'description' => 'Fried and served with meat sauce.'
                            ),
                            array (
                                'name' => 'French Fries',
                                'price' => '2.00',
                                'description' => 'Hand cut. Add cheese, bacon, or chili for <span  class="sc">$1</span> each if you like.'
                            ),
                            array (
                                'name' => 'Snacks',
                                'price' => '1.00',
                                'description' => 'Old Vienna potato chips, assorted nuts, sandwich crackers, or jerky.'
                            )
                        )
                    ),
                    array(
                        'title' => 'Sandwiches',
                        'description' => 'Add french fries, Old Vienna chips, or diced breakfast potatoes for <span class="sc">$1</span>.',
                        'items' =>  array(
                            array (
                                'name' => 'Burger',
                                'price' => '5.00',
                                'description' => 'Crispy edge griddle burger on a toasted bun. Add american, swiss, provel, or soft cheddar for <span  class="sc">$1</span>. Bacon, chili, or a fried egg are also <span  class="sc">$1</span>. Lettuce, tomato, onion, pickle, and condiments on request.'
                            ),
                            array (
                                'name' => 'Chicken Club',
                                'price' => '6.00',
                                'description' => 'Grilled chicken breast with bacon and swiss cheese on sourdough. Lettuce, tomato, and condiments on request.'
                            ),
                            array (
                                'name' => 'Turkey Club',
                                'price' => '6.00',
                                'description' => 'Turkey, bacon, swiss, lettuce, and tomato on sourdough. Mayo or other condiments on request.'
                            ),
                            array (
                                'name' => 'Gerber',
                                'price' => '5.00',
                                'description' => 'Ham on a garlic cheese bun.'
                            ),
                            array (
                                'name' => 'St. Paul',
                                'price' => '3.00',
                                'description' => 'Ham, turkey, or bacon with egg patty on sourdough. Substitute chicken for <span  class="sc">$1</span> more. Pickles, mayo, and other condiments available on request.'
                            ),
                            array (
                                'name' => 'Breakfast',
                                'price' => '3.00',
                                'description' => 'Sausage, ham, or bacon with a fried egg on sourdough. Add cheese for <span  class="sc">$1</span>. Condiments on request.'
                            )
                        ),
                    ),
                    array(
                        'title' => 'Skillets',
                        'description' => 'Diced potatoes, two eggs your way, topped with cheese. Add toast for <span class="sc">50¢</span>.',
                        'items' =>  array(
                            array (
                                'name' => 'Standard',
                                'price' => '7.00',
                                'description' => 'Sausage, ham, or bacon.'
                            ),
                            array (
                                'name' => 'Western',
                                'price' => '8.00',
                                'description' => 'Sausage or ham, red and green peppers, and onions.'
                            ),
                            array (
                                'name' => 'Slinger',
                                'price' => '8.00',
                                'description' => 'Hamburger patty, chili, onions, and jalapenos.'
                            ),
                            array (
                                'name' => 'Fajita',
                                'price' => '8.00',
                                'description' => 'Grilled chicken, onions, and red and green peppers.'
                            )
                        )
                    )
                );

                foreach ( $sections as $section )
                {
                    echo '<h3>' . $section['title'] . '</h3>';
                    
                    if ( $section['description'] != '' )
                    {
                        echo '<p>' . $section['description'] . '</p>';
                    }

                    echo '<ul>';

                    foreach ( $section['items'] as $item )
                    {
                        echo '<li>';
                        echo '<h4>'.$item['name'] . ' <span>$' . $item['price'] .'</span></h4>';
                        echo '<p>' . $item['description'] . '</p>';
                        echo '</li>';
                    }

                    echo '</ul>';
                }
            ?>
        </main>

        <?php include 'inc/footer.php'; ?>
    </div>
</body>
</html>