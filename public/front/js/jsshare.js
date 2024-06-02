//Social Media Sharing


function facebook_share(link) {
	share_link = 'http://www.facebook.com/share.php?u=' + encodeURIComponent(link);
	open_in_popup(share_link);
}

function twitter_share(link) {
	share_link = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(link);
	open_in_popup(share_link);
}

function linkedin_share(link) {
	share_link = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(link);
	open_in_popup(share_link);
}

function open_in_popup(encoded_link) {
	window.open(encoded_link, 'Share', 'width=600,height=600');
}
