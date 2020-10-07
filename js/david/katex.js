'use strict';
import katex from 'https://cdn.jsdelivr.net/npm/katex@0.12.0/dist/katex.mjs';

document.getElementById('katex_btn').addEventListener('click', () => {
    katex.render(
        document.getElementById('katex_in').value,
        document.getElementById('katex_out'),
        {
            throwOnError: true
        }
    );
});
