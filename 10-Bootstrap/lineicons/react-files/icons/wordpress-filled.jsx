import React from 'react';

function WordpressFilled(props) {
	const title = props.title || "wordpress filled";

	return (
		<svg height="64" width="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
	<title>{title}</title>
	<g fill="#000000">
		<path d="M32 1C14.8 1 1 14.9 1 32s13.8 31 31 31 31-14 31-31S49 1 32 1zm27.5 31c0 10.4-5.8 19.4-14.2 24l8-20.6c.4-1.1 3.2-7.9 4.2-13.7 1.3 3.3 2 6.8 2 10.3zM37.9 18.5H23.8c-.6 0-1 .4-1 1s.4 1 1 1h2l3.5 9-4.2 10.8-7.6-19.9h2.4c.6 0 1-.4 1-1s-.4-1-1-1h-4.1l-6.6-.1C13.7 10.4 22.4 5.2 32 5.2c7 0 13.5 2.8 18.3 7.3-2.5.4-4.5 2.4-5.1 4.8-.6 2.8.4 5.1 1.5 7.2 1.1 2.3 2.3 4.4 1.4 6.9L44.4 41l-7.9-20.6H38c.6 0 1-.4 1-1 0-.5-.7-.9-1.1-.9zM4.5 32c0-3.5.7-6.9 2-10L20 56.7C10.7 52.3 4.5 42.9 4.5 32zm27.8 5.9l8 20.3c-2.7.8-5.4 1.3-8.3 1.3-2.7 0-5.2-.3-7.6-1.1l7.9-20.5z"/>
	</g>
</svg>
	);
};

export default WordpressFilled;