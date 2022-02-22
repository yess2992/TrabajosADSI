import React from 'react';

function Bootstrap(props) {
	const title = props.title || "bootstrap";

	return (
		<svg height="64" width="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
	<title>{title}</title>
	<g fill="#000000">
		<path d="M41.4 39.7c0 5.9-5.5 5.8-6 5.8H24.1V34.2h11.2c6-.2 6.1 4.3 6.1 5.5zm-6.9-10.2c.1 0 5.3.1 5.3-5.1 0-2.1-.4-4.9-5.3-4.9H24.1v10h10.4zm28.4-18.1v41.3c0 5.6-4.6 10.3-10.4 10.3h-41C5.7 63 1.1 58.4 1.1 52.6V11.4C1.1 5.6 5.7 1 11.5 1h41.3c5.5 0 10.1 4.6 10.1 10.4zm-15.2 29c0-3-.8-8-6.7-9.3V31c3.2-1.4 5.1-3.9 5.1-7.6 0-1 .3-9-10.7-9H17.9v36c17.7 0 19.4.1 22.6-.7 1.9-.6 7.2-2.4 7.2-9.3z"/>
	</g>
</svg>
	);
};

export default Bootstrap;