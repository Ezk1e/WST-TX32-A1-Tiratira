<style>

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.navbar-brand {
    font-family: 'Exo', sans-serif;
    font-weight: 700;
    color: #1a76bb;
}

.navbar-brand:hover {
    color: #00a4e5;
    }

.nav-link {
    font-family: 'Exo', sans-serif;
    font-weight: 700;
    color: #1a76bb;
}

.nav-link:hover {
    color: #00a4e5;
}

.navbar-custom {
    background-color: #d9d8d6;
}

p{
    text-align: justify;
    color: #ffffff;
}

body {
    font-family: sans-serif;
    font-size: 16px;
    line-height: 1.5;
    background-color: #ffffff;
}

.yellow {
    background-color: #ffe01e;
    color: #1a78af;
    font-family: 'Catamaran', sans-serif;
}

.lightblue {
    background-color: #00a4e5;
}

.cyan {
    color: #1a78af;
}

.center {
    text-align: center;
}

.hero-section {
    position: relative;
    text-align: center;
    color: white;
}

.hero-image {
    width: 100%;
    height: auto;
    opacity: 1;
}

.hero-section h1 {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 5em;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.hero-section p {
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 2em;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.about-title {
    font-family: 'Exo', sans-serif;
    font-weight: bold;
    font-size: 50px;
    padding: 15px;
}

.about-text {
    font-family: 'Ubuntu Mono', monospace;
    font-size: 20px;
    padding: 20px;
}

.boxes {
    background-color: #ffffff;
    padding: 10px;
    width: 100%;
}

.boxes .container {
    display:flex;
    justify-content: center;
    flex-direction: row;
}

.box {
    flex: 1;
    display:flex;
    justify-content: space-between;
    flex-direction: column;
    align-items: center;
    width: 100%;
    margin: 15px;
    transition: all 0.3s;
}

.box h3 {
    text-align: center;
    font-weight: 700;
    margin-top: 10px;
}

.box:hover {
    transform: scale(1.15);
}

.buttons {
    width: 150px;
    object-fit: cover;
}

.img-hv {
    transition: transform 0.3s ease;
}

.img-hv:hover {
    transform: scale(1.05);
}

</style>