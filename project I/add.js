const books = [
    { name: "To Kill a Mockingbird", author: "Harper Lee", date: "1960" },
    { name: "1984", author: "George Orwell", date: "1949" },
    { name: "The Great Gatsby", author: "F. Scott Fitzgerald", date: "1925" },
    { name: "One Hundred Years of Solitude", author: "Gabriel Garcia Marquez", date: "1967" },
    { name: "Moby Dick", author: "Herman Melville", date: "1851" },
    { name: "War and Peace", author: "Leo Tolstoy", date: "1869" },
    { name: "The Catcher in the Rye", author: "J.D. Salinger", date: "1951" },
    { name: "Pride and Prejudice", author: "Jane Austen", date: "1813" },
    { name: "The Book Thief", author: "Markus Zusak", date: "2005" },
    { name: "The Hobbit", author: "J.R.R. Tolkien", date: "1937" },
    { name: "Crime and Punishment", author: "Fyodor Dostoevsky", date: "1866" },
    { name: "The Lord of the Rings", author: "J.R.R. Tolkien", date: "1954" },
    { name: "The Alchemist", author: "Paulo Coelho", date: "1988" },
    { name: "Harry Potter and the Sorcerer's Stone", author: "J.K. Rowling", date: "1997" },
    { name: "The Little Prince", author: "Antoine de Saint-Exupéry", date: "1943" }
];

const bookList = document.getElementById("book-list");
const cartItems = document.getElementById("cart-items");
const totalBooks = document.getElementById("total-books");

let cart = [];

function displayBooks() {
    books.forEach((book, index) => {
        const bookDiv = document.createElement("div");
        bookDiv.classList.add("book");

        bookDiv.innerHTML = `
            <h3>${book.name}</h3>
            <p><strong>Author:</strong> ${book.author}</p>
            <p><strong>Date:</strong> ${book.date}</p>
            <button onclick="addToCart(${index})">Add to Cart</button>
        `;

        bookList.appendChild(bookDiv);
    });
}

function addToCart(index) {
    const book = books[index];
    cart.push(book);
    updateCart();
}

function updateCart() {
    cartItems.innerHTML = "";

    cart.forEach((book, index) => {
        const listItem = document.createElement("li");
        listItem.innerText = `${book.name} by ${book.author}`;
        cartItems.appendChild(listItem);
    });

    totalBooks.innerText = `Total Books: ${cart.length}`;
}

// Initialize the book list on page load
displayBooks();
