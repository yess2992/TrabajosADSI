import React from 'react';

function Skype(props) {
	const title = props.title || "skype";

	return (
		<svg height="64" width="64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
	<title>{title}</title>
	<g fill="#000000">
		<path d="M3.1 32.3c.1-1.4.1-2.7.4-3.9.1-.6 0-1-.3-1.6C.9 22.9.5 18.6 1.5 14.3c1.1-4.9 3.9-8.7 8.5-11 5.6-3 11.3-3 16.9.1.4.1.8.3 1.4.1 7.2-.8 13.8.6 19.9 4.7 6.3 4.2 10.3 10.1 12 17.6.8 3.2.8 6.6.4 9.9-.1.4-.1.8.1 1.3 2.3 3.9 3 8.2 1.7 12.7-1.3 4.9-4.1 8.7-8.6 11.1-5.6 3-11.4 3-16.9-.1-.4-.1-.8-.3-1.3-.1-4.5.6-8.9.1-13.2-1.4-5.6-1.8-10.3-5.4-13.8-10.1-2.7-3.9-4.6-7.9-5.1-12.4-.3-1.6-.3-3-.4-4.4zm29 18.4c1.7-.1 3.2-.4 4.9-.6 2.4-.4 4.5-1.4 6.3-2.7 3.1-2.5 4.4-5.8 3.9-9.7-.3-2.7-1.5-4.8-3.8-6.3-1.1-.8-2.5-1.4-3.8-1.8-3-1-6.1-1.7-9.2-2.5-1.5-.3-3-.8-4.4-1.7-1.6-1-2-2.7-1.1-4.1.6-1 1.6-1.6 2.5-2 1.7-.7 3.4-.7 5.1-.6 2.1.1 3.8 1.1 4.8 3 .4.8.8 1.6 1.4 2.3.4.6.8 1.1 1.5 1.4 1.8.8 4.2-.1 4.8-2 .6-1.5.1-3-.7-4.2-1.4-2.3-3.4-3.7-5.8-4.5-2.3-.8-4.5-1.1-7-1.1-3.2 0-6.3.4-9.4 1.7-3.2 1.6-5.2 3.9-5.6 7.6-.3 3.4 1.1 6.1 3.8 7.9 1.7 1.3 3.7 2 5.8 2.5 2.1.6 4.2 1.1 6.5 1.5 1.4.4 3 .8 4.2 1.5 2.5 1.5 2.7 4.8.4 6.6-1.1 1-2.5 1.5-4.1 1.7-1.7.3-3.5.3-5.4-.1-2-.6-3.2-2-4.2-3.7-.4-1.1-1-2-1.7-3-.8-1.3-2.1-1.5-3.5-1.3-1.4.3-2.4 1.1-2.7 2.5-.1 1.1 0 2.3.4 3.2 1.1 3 3.2 4.9 5.9 6.3 3.7 2 6.9 2.2 10.2 2.2z"/>
	</g>
</svg>
	);
};

export default Skype;