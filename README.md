# nz.co.fuzion.entitymessages
Entity Messages

@Eileen:
"This extension has been my effort on this front https://github.com/eileenmcnaughton/nz.co.fuzion.entitymessages - it adds free-text domain tokens that can be added at will & can potentially contain other tokens / be rendered through smarty - ie. so {$domain.header} can contain {$domain.logo} - however it is incomplete

# Working notes (via Mattermost chat):

 * I think I had the angular form working & then broke it. If the data is in the DB the tokens work - but the UI to get them in is wrong
 * part of the issue is that I made a breaking change to the schema & haven't gotten back to the UI
 * the other issue is just working out permissions issues - ie. adding smarty to a tpl requires certain perms
 * & finally the angular form was still not 100% even before I broke it
