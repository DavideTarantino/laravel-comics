<main>
    <figure>
        <img src="{{ Vite::asset('resources/img/logo-sm.png') }}" alt="logo">
    </figure>
        <ul>
            <li>Characters</li>
            <li>Comics</li>
            <li>Movies</li>
            <li>TV</li>
            <li>Games</li>
            <li>Collectibles</li>
            <li>Videos</li>
            <li>Fans</li>
            <li>News</li>
            <li>Shop</li>
        </ul>
        <input type="text" placeholder="search">
</main>

<style lang="scss" scoped>
    main{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 70%;
        margin: 0 auto;
        padding: 1%;

        img{
            width: 80%;
        }

        ul{
            display: flex;
            gap: 30px;
            
            li{
                text-transform: uppercase;
                font-family: sans-serif;
                list-style-type: none;
                font-size: 80%;
            }
        }
    }

    .active{
        color: blue;
    }
</style>
