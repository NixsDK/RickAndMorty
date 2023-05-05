body {
    font-family: Arial, sans-serif;
    background-color: var(--bg-color, #ffffff);
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    max-width: 1200px;
    margin: 0 auto;
}

.card {
    box-sizing: border-box;
    width: calc(100% / 3 - 20px);
    padding: 10px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.pagination {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.pagination a {
    text-decoration: none;
    color: #333;
    background-color: #f4f4f4;
    padding: 10px 15px;
    margin: 0 5px;
    border-radius: 5px;
}

.pagination a:hover {
    background-color: #ccc;
}

.color-selector {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.color-selector button {
    width: 30px;
    height: 30px;
    border: none;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.color-selector button:hover {
    opacity: 0.8;
}
