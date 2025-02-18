(function (blocks, element, data, components, compose) {
    const { registerBlockType } = blocks;
    const { createElement: el } = element;
    const { useEffect, useState } = element;

    registerBlockType('books-list/custom-block', {
        title: 'Books List',
        icon: 'book',
        category: 'design',

        edit: function () {
            const [books, setBooks] = useState([]);

            useEffect(() => {
                wp.apiFetch({ path: '/wp/v2/books' })
                    .then((books) => {
                        setBooks(books);
                        setLoading(false);
                    })
                    .catch((err) => {
                        console.error("Error fetching books:", err);
                    });
            }, []);

            if (!books.length) {
                return el('p', {}, 'No books found.');
            }

            return el(
                'div',
                {},
                el('h3', {}, 'List of Books:'),
                el(
                    'ul',
                    {},
                    books.map((book) =>
                        el('li', { key: book.id }, book.title.rendered)
                    )
                )
            );
        },

        save: function () {
            return null;
        },
    });
})(window.wp.blocks, window.wp.element, window.wp.data, window.wp.components, window.wp.compose);

