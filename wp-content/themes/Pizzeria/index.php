<?php
/*
 * Template Name: Start page
 */
?>

<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="overlay-container">
            <img src="wp-content/themes/Pizzeria/assets/pizzeria2.jpg">
        </div>

        <div class="hero-text-container">
            <h1>Pizzeria</h1>
            <p>Wood-fired pizzas with 48-hours fermented dough, seasonal toppings, and bold, modern flavor - where tradition meets fresh, local ingredients.
            </p>
        </div>
    </section>

    <section id="story" class="story">
        <h2>story</h2>
        <p>At The Pizzeria, we bring old-world craft into the modern age. Our pizzas start with 48-hour fermented dough, blistered to perfection in a roaring stone oven and topped with seasonal ingredients sourced from local farms.
        </p>

        <p>
            From classic Margherita with creamy fresh mozzarella to bold creations layered with house-made ricotta, hot honey, and wild arugula, every pie balances tradition and innovation. Pair your slice with a natural wine or small-batch craft beer, grab a seat under warm industrial lights, and taste pizza reimagined.
        </p>
    </section>

    <section id="pizzas" class="pizzas-container">
        <h2>our pizzas</h2>

        <div class="pizzas">
            <div class="pizza-img">
                <img src="wp-content/themes/Pizzeria/assets/margherita.jpg">
                <a href="<?php echo get_permalink(34); ?>" class="pizza-link">Margherita</a>
            </div>
            <div class="pizza-img">
                <img src="wp-content/themes/Pizzeria/assets/salame.jpg">
                <a href="<?php echo get_permalink(32); ?>" class="pizza-link">Salame</a>
            </div>
            <div class="pizza-img">
                <img src="wp-content/themes/Pizzeria/assets/vegetale.jpg">
                <a href="<?php echo get_permalink(28); ?>" class="pizza-link">Vegetale</a>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>