<?php 
require_once("config.php");

if(!empty($_GET['id'])) {
	// Get info from db
	$id = preg_replace("/[^0-9]/","",$_GET['id']);
	$result = $db->query("SELECT * FROM smf_tools_nlw_nl WHERE id = " . $id);
	$nl = $result->fetch_assoc();
	$nl['month_formatted'] = date('F', strtotime("2016-{$nl['month']}-01"));
} else {
	header("Location: index.php");
	die();
}

require_once("header.php");
?>
		
		<ul>
			<li class="opa">
				<span class="text">
					Code:
					<br />
					<textarea readonly="readonly" onclick="this.focus(); this.select()" rows="30" cols="100">
[spoiler=<?php echo $nl['month_formatted']; ?> NL <?php echo $nl['year']; ?>]
[center]
[table]
[tr][td]
[center]
[table]
[tr][td]
[center][img]http://i.imgur.com/Q3g8B.png[/img][/center]
[/td][/tr]

[tr][td]
[center][size=70pt][font=evanescent]<?php echo $nl['month_formatted'] . ' ' . $nl['year']; ?>[/size][/center]
[/td][/tr]


[tr][td]
[center][img]<?php echo $nl['primary_img_url']; ?>[/img]
[/td][/tr]


[tr][td]
[center][size=36pt][font=trebuchet ms][b][color=#77DDFF]<?php echo $nl['primary_slogan']; ?>[/color][/size][/center]
[/td][/tr]
[/table]


[table]
[tr][td]
[center][img height=250]http://i.imgur.com/XSkfOrg.jpg[/img][/center]
[/td]


[td]
[center][img]http://i.imgur.com/0ZGw7JD.gif[/img][/center]
[/td][/tr]


[tr][td]
[center][url=http://elementscommunity.org/forum/index.php/board,190.0.html][IMG]http://i.imgur.com/Fd9tssk.png[/img][/url][/center]

[list][li][url=http://elementscommunity.org/forum/pvp-world-championship/]The PVP World Championship[/url] has entered it's final stage, the top 8! 8 may enter, but only one will emerge victorious. Who will it be? Stay tuned![/li][/list]

[list][li]In the 9th War, four teams have already gone down.  Darkness [url=https://docs.google.com/spreadsheets/d/18og9CmfWwlk7-4ksp6IQCYKqQvlHNVgRHjao7XLXW3Q/edit#gid=2117151740]still dominates the competition,[/url] with Air behind them; while Gravity takes the backseat with a devastating 0-3 round in round 13. Keep your eyes open to see if Darkness can remain on top, or if we'll have a new face at #1![/li][/list]

[/td]



[td]
[center][url=http://elementscommunity.org/forum/index.php/board,186.0.html][IMG]http://i.imgur.com/bzJG6ju.png[/img][/url][/center]

[list][li]In the [url=http://elementscommunity.org/forum/competitions/writing-competition-thank-you-notes-%28voting%29/]Thank-you Notes[/url] competition, [user]eljoemo[/user] emerges victorious, after a tie with [user]Naesala[/user]![/li][/list]

[list][li]I challenge you to a challenge of challenging these challenges to your expectations, in the [url=http://elementscommunity.org/forum/competitions/competition-a-challenge-of-challenges-%28voting%29/]A Challenge of Challenges[/url] competition! Voting is underway; cast in your vote![/li][/list]

[/td][/tr]


[tr][td]
[center][img width=350 height=250]http://i.imgur.com/Eeml58y.jpg[/img][/center]
[/td]

[td]
[center][img width=350 height=250]http://i.imgur.com/UC0iAlO.png[/img][/center]
[/td][/tr]


[tr][td]
[center][url=http://elementscommunity.org/forum/index.php/board,77.0.html][IMG]http://i.imgur.com/ltbBRSY.png[/img][/url][/center]


[list][li]The December 5th [url=http://elementscommunity.org/forum/pvp-tournaments/weekly-tournament-december-5th-odd-or-even-unupgraded/]Odd or Even - Unupgraded[/url] tournament certainly was an odd tourney, but even then, tournaments are not an odd concept to [user]mrpaper[/user][img]http://elementscommunity.org/forum/awards/358386de6afc06ae4ada78835ae772a1_Weekly-Tourney-Winner.png[/img]! mrpaper took up the Even side of the tournament, also bringing up his Weekly Tournament trophy count to an even number; 10! He said he liked the rules because they let him be creative, and he had fun throughout the tournament. In addition, the most exciting moment of the tournament for him was "beating Physsion to make a scratch into the Darkness master skull that he will remember in war!"
Congratulations![/li][/list]

[list][li]With nothing in the sky, no way to fly, [user]Jen-i[/user][img]http://elementscommunity.org/forum/awards/132fc6a94e70f8e2029c8b03196580b4_Trophy.png[/img] is now the [url=http://elementscommunity.org/forum/pvp-tournaments/weekly-tournament-december-12th-down-to-earth-unupgraded/]Down to Earth[/url] guy, who won our ground-bound December 12th unupgraded tournament. In a way it's strange: we know Jen-i is a pirate, not some average landlubber, yet he did fairly well when set on stone. Please read a mini-interview with him (in the spoiler below):

[spoiler=Interview with the Winner]
[color=yellow]Did you like the tourney in general? How about the rules?[/color]
[color=teal]The tourney was fun, it was the 125th tourney entry for me. So that feels, if not quite significant, at least personally interesting. It's not often I get to play any more, this was only my 3rd tourney in 2015. I found the rules simple and clear; considering I had no time to prep decks that was a nice advantage. I've built a 
deck list over the years largely for league play, so modifying decks off that list left me with 7 fairly strong deck ideas to play. It gave me a round to truly figure out the meta for the tourney, then I cut that list from 7 two 2 decks and ran with it.[/color]

[color=yellow]When, for you, was the most exciting moment of the tournament?[/color]
[color=teal]The finals are always the most exciting time - frequently the moment before you click "Go!" to find your opponent for the duel. It was certainly the case in this match up: Afda had two horribad draws giving me a win. Both his decks should have had a solid advantage over the builds I brought.[/color]

[color=yellow]In just a short sentence, or even one word, how would you summarize the whole competition?[/color]
[color=teal]Nostalgic, it was fun - I've been in chat 3 or so hours in the last 24 which is a huge spike in time for me. We'll see if that turns into anything long term or not. RootRanger was selling me on an upcoming PvP Event Devil's Gate which seems to have caught my interest, the rest of you should check it out too.[/color]
[/spoiler]
Congratulations! We wish you best of luck in your 126th tournament! :)
[/li][/list]

[list][li]The Weekly Tournament on December 19th,[url=http://elementscommunity.org/forum/pvp-tournaments/weekly-tournament-dec-19th-speedbuilding-potluck-rules-upgradedsharded//] Potluck Rules - Upgraded & Sharded[/url] ended up with some very interesting rules being rolled! "Equal amount of pillars and pendulums, Exactly 6 copies of each card (not including pillars/pends), The nub-beloved: No creatures except Dragons", were the rules for that tournament, however, they certainly did not phase [user]Afdarenty[/user][img]http://elementscommunity.org/forum/awards/358386de6afc06ae4ada78835ae772a1_Weekly-Tourney-Winner.png[/img]! Funny, isn't he depicted as a dragon in the Newsletter Comics? ;) Now let's have a look what the winner had to say about that tournament (in the spoiler below):

[spoiler]Did you like the tourney in general? How about the rules?
[color=yellow]At first glance I wasn't a big fan of the pot luck rules we ended up with. This was because it seemed like there were very few viable decks. As the tourney went on I revised this opinion - I actually played more different decks during this tourney than in any other that I've played in.[/color]

When, for you, was the most exciting moment of the tournament?
[color=yellow]The most exciting moment for me was the first game of the semi-finals. I was playing Catatitans, and got absolutely demolished by JCJ's Nymphs Tears/Steal deck. It was the moment I realised there was actually a lot more depth to this ruleset than I had thought, and I ended up building 2 new decks for the next 2 games.[/color]

In just a short sentence, or even one word, how would you summarize the whole competition?
[color=yellow]In short, it was a tourney with a lot of variety. I don't think I played against the same deck twice.[/color][/spoiler]
Congratulations! :) [/li][/list]

[list][li]"Ho ho ho, Merry... RNGmas?" Merry RNGmas indeed! In the [url=http://elementscommunity.org/forum/pvp-tournaments/weekly-tournament-december-26th-merry-rngmas-unupgraded/]Merry RNGmas - Unupgraded[/url] tournament, players had fun opening their RNGmas presents, in the form of Fate Eggs and Mutations! [user]UTAlan[/user][img]http://elementscommunity.org/forum/awards/358386de6afc06ae4ada78835ae772a1_Weekly-Tourney-Winner.png[/img] got the best present of all, a tournament win! Below, in the spoiler, a short interview with the 'gifted' admin:

[spoiler=Short interview with the winner]Did you like the tourney in general? How about the rules?
[color=yellow]It was fun! The results were, of course, dependent on RNG more than usual. That's the nature of Mutation and Fate Egg. But I think this worked to my advantage, since deck-building and PvP aren't really my strengths. This leveled the playing field a bit and helped put me in a position to win the tourney.[/color]

When, for you, was the most exciting moment of the tournament?
[color=yellow]I don't remember exactly which game it was, but I think it was a Game 3. Things were looking dim as I was struggling to get damage out and was taking in more than I was dealing. My opponent played Pandemonium, wiping out his creatures and only freezing or lobo-ing mine, turning the game around and helping me to win.
[/color]
In just a short sentence, or even one word, how would you summarize the whole competition?
[color=yellow]RNG, yo.[/color] [/spoiler]
Congratulations and we wish you finding even more presents under the RNGmas Tree! ;)[/li][/list]

[/td]

 

[td]
[center][url=http://elementscommunity.org/forum/pvp-league/][IMG]http://i.imgur.com/0bdKGuA.png[/img][/url][/center]

[list]
[li][url=http://elementscommunity.org/forum/pvp-league/championship-league-32013/]Championship League[/url]: Championship League has ended, with [user]xnoize[/user] claiming the crown! Congratulations on another league win![/li]

[li][url=http://elementscommunity.org/forum/pvp-league/battle-league-32013/]Battle League[/url]: Battle League comes to an end as well, with [user]jonathanCrazyJ[/user] holding another top spot. Congrats, JCJ![/li]

[li]The 3/2015 Seasons of Battle League and Championship league have [url=http://elementscommunity.org/forum/pvp-league/elements-pvp-league-32015-announcements/msg1217497/#msg1217497]come to an end.[/url] Congratulations to the winners![/li][/list]
[hr]

[center][img width=350 height=250]http://i.imgur.com/g7FcpDx.jpg[/img]

[hr]
[center][url=http://elementscommunity.org/forum/forum-games/][IMG]http://i.imgur.com/iNI1OdZ.png[/img][/url][/center]

[list][li][url=http://elementscommunity.org/forum/forum-games/the-witch's-game-5/]Witch Game 5 is still underway![/url] It's a detective game where you need to solve the mysterious cases without ever believing that it was done by the witch's magic.Can you solve the mysteries using the power of [color=dodgerblue][b]Blue Truths[/b][/color]?[/li][/list]

[list][li]The dust in [url=http://elementscommunity.org/forum/forum-games/relic-sweeper-by-kuroaitou/]Relic Sweeper[/url] has settled, and there's one clear winner.  [user]antiaverage[/user] has swiftly ended all the lives of the adventurers in the Relic Maze! Congratulations on your win, antiaverage.[/li][/list]

[list][li]Mafia [url=http://elementscommunity.org/forum/forum-games/elements-mafia-54-by-theelkspeaks-60543/]54[/url] with [user]theelkspeaks[/user] as host, is still underway! The outcome looks bleak for town, who are oddly the villains! Mafia, the heroes, have suffered no casualties, and the death toll will only rise higher for town. Can town swing this back in there favor? Stay tuned![/li][/list]

[list][li]Mafia [url=http://elementscommunity.org/forum/forum-games/elements-mafia-55-by-coffeeditto/]55[/url] with [user]Coffeditto[/user] as host has just opened to signups! The theme of this Mafia is League of Legends, a popular game, belonging to the genre "MOBA". Sign up today![/li][/list]


[/td][/tr]
[/table]



[table][tr][td][img width=600]http://[/img]
[center][size=14pt][url=http://elementscommunity.org/forum/index.php?action=staff]Staff Changes[/url][/size][/center]

[list][li]Congratulations to our newest Card Curators, [user]kirbylover314[/user] and [user]Hyroen[/user]![/li][/list]

[hr]

[center][size=24pt][font=verdana][i][color=skyblue]Tea Time with [/color][user]MeowMeowCat[/user][/i][/font][/size]

[size=18pt]Below is the portion of an interview:[/size][/center]


[b][i][color=orange]Please tell us a short history of your presence here.[/color][/i]

[b][i][color=#73ace5]Well, in September of 2014, I was talking to [user]skyironsword][/user] on Kongregate, and somehow, these forums came up in the conversation. I popped into chat, as a lowly little guest, and just watched things flow by. Eventually, I made an account, but then took a hiatus for some reason. I don't think I made a post, just kinda stuck around in chat. Eventually, in May of 2015, [url=http://elementscommunity.org/forum/introduce-yourself/hey-58336/msg1188978/#msg1188978]I came back to the forums[/url], and you guys have had to deal with me ever since.[/color][/i]

[b][i][color=orange]Why did you choose your username? Also, why do you think cat-related nicknames are so popular on the forum? (Submachine)[/color][/i]

[b][i][color=#73ace5]I chose my username because, at the time, I quite liked cats. I still hold a particular fondness for them. As for why cat related nicknames are so popular? I guess cats are just popular in general, and people like them. I mean, Egypt used to place them on the same level as gods, so, they must mean something :P.[/color][/i]

[b][i][color=orange]What breed of cat are you? Your accent is that of a normal house cat but your coloration is most unusual. (dracomageat)[/color][/i]

[b][i][color=#73ace5][url=http://imgur.com/gallery/LWP07e9]Norwegian Forest Cat.[/url][/color][/i]

[b][i][color=orange]What is the thing that distinguishes you the most from the numerous other cats out there? (Jenkar)[/color][/i]

[center][i][size=14pt]Find the answer and more here: [url=http://elementscommunity.org/forum/elements-council/featured-community-member/msg1219126/#msg1219126]LINK[/url]. You cannot find this interview in the first post of Featured Community Member thread because it is full. This is only a temporal issue and council is working on solving this.[/size][/i][/center]


[center][img width=200]http://i.imgur.com/neBXRvw.gif[/img]
[/center]

[/td]


[td]
[IMG width=200]http://i.imgur.com/Df0xgJa.gif[/img]
[size=14pt][url=http://elementscommunity.org/forum/index.php/board,367.0.html]New Members[/url][/size]
[list]
[li][user]Lynx13[/user][/li]
[li][user]KAISLADE[/user][/li]
[li][user]Jog0t4Niseazz[/user][/li]
[li][user]Yuzuhara[/user][/li]
[li][user]Timdood3[/user][/li]
[li][user]Khaleesi[/user][/li]
[li][user]bryantknapp[/user][/li]
[li][user]ticklebutterfly[/user][/li]
[li][user]brownclown[/user][/li]
[li][user]spencer51298[/user][/li]
[li][user]Feidhelm[/user][/li]
[li][user]Purx[/user][/li]
[li][user]bwc83[/user][/li]
[li][user]General Anubis[/user][/li]
[li][user]Chaos[/user][/li]
[li][user]K4rk4t[/user][/li]
[li][user]Vendetta7[/user][/li]
[li][user]김진수[/user][/li]
[li][user]erenyeager[/user][/li]
[li][user]frahnseeskoh[/user][/li]
[li][user]joe mew[/user][/li]
[li][user]pretugues[/user][/li]
[li][user]Cameroncornstar[/user][/li]
[li][user]Smokey1110[/user][/li]
[li][user]Svelting[/user][/li]
[li][user]Raybelfast[/user][/li]
[li][user]Tanagerbird[/user][/li]
[li][user]shatokan123[/user][/li]
[li][user]poisonous_noises[/user][/li]
[li][user]jell111[/user][/li]
[li][user]angrytiger[/user][/li]
[li][user]clement the yoloed[/user][/li]
[li][user]ValVi[/user][/li]
[li][user]Yggdrasill[/user][/li]
[li][user]legomensa[/user][/li]
[li][user]MaxG-[/user][/li]
[li][user]ThallionDarkshine[/user][/li]
[li][user]Abrexis[/user][/li]
[/list]

[spoiler=Introduction posts]

Here are the members who posted in the [url=http://elementscommunity.org/forum/introduce-yourself/] Introduce Yourself[/url] board (but not later than in 2 months prior to Newsletter). Just click a certain name to be redirected to corresponding introduction post. Don't be rude, say hello to new comers ;)

[list]
[li][url=http://elementscommunity.org/forum/introduce-yourself/hey-there-3/]Timdood3[/url][/li]
[li][url=http://elementscommunity.org/forum/introduce-yourself/hey-60670/]brownclown[/url][/li]
[li][url=http://elementscommunity.org/forum/introduce-yourself/herrow-ouo/]Khaleesi[/url][/li]
[li][url=http://elementscommunity.org/forum/introduce-yourself/new-player-60754/]Raybelfast[/url][/li]
[li][url=http://elementscommunity.org/forum/introduce-yourself/ryan666-returning!/]Yggdrasill[/url][/li]
[li][url=http://elementscommunity.org/forum/introduce-yourself/hello-everyone-60840/]MaxG-[/url][/li]
[/list]
[/td][/tr][/table]



[table][tr][td]

[center][IMG]http://i.imgur.com/SCAAVZ0.png[/img][/center]

This month I would like to present a comic idea of [user]Zawadx[/user] - the first part of War#9 Report. Below it's only an excerpt of a comic, don't miss to click a link to a full comic! Enjoy! :)

[spoiler=An excerpt of a comic][IMG width=800]http://i.imgur.com/16WtyoN.png[/img][/spoiler]

[size=18pt][url=http://elementscommunity.org/forum/visual-arts/krzysiekxd's-(and-company)-comics-thread-part-2/]LINK TO A FULL COMIC[/url][/size]

[hr][hr]


[center][IMG]http://i.imgur.com/3yODds7.png[/img][/center]


[center][url=http://elementscommunity.org/forum/rainbow-decks/the-minority-report-(revisited)/][size=24pt]The Minority Report (Revisited)[/size][/url][/center]
[center][size=8pt]This Deck idea of the Month was brought to you by [user]Discord[/user][/size][/center]

[center][deck]4vj 4vj 4vj 4vj 4vj 4vj 6u2 6u2 6u2 6u2 7an 7ee 7ee 7ee 7ee 7q1 7q1 7q1 7q1 7q4 7q4 7q4 7q4 7qb 7qb 7qb 7th 7th 80k 80k 8ps[/deck][/center]

Minority Report is an interesting deck to use which only requires minimum amount of quanta. Six Nova can still hold a lot, for being such a small quantity of quanta. With Time being the main element w/ Deja Vu, this deck is also a very powerful rainbow. From the Epinephrine to rush damage down to the silences to deny your opponent from drawing. This deck is a very useful rainbow.

[color=pink]Nova[/color] (6): The main and only source of quanta in this deck. Six of these can go a long way.

[color=hotpink]Chaos Power[/color] (4): This spell is the perfect way to boost your Deja Vu for more damage, and double when it splits!

[color=limegreen]Epinephrine[/color] (1): More damage is a key to winning faster. Epinephrine is a good way to rush out damage faster.

[color=orange]Shard of Bravery[/color] (4): This deck needs a way to rush itself out aswell. Got this in your hand but nothing else? Use it, it might do you some good.

[color=yellow]Elite Deja Vu[/color] (4): Four creatures for 4 copies of buff spell. Four turns into eight, which can only mean more damage!

[color=yellow]Rewind[/color] (4): What is a deck without some creature control? If there's too much damage coming from your opponent, then just rewind it!

[color=yellow]Precognition[/color] (3): Looking to see what your opponent has in his hand for you? Use this and prepare yourself with one extra card.

[color=black]Nightmare[/color] (2): A great way to prevent your opponent from drawing, while restoring health to you.

[color=turquoise]Silence[/color] (2): Another good way to prevent your opponent from drawing cards. Use it wisely, however. It only lasts one turn.

Strengths: With all this rainbow power, this deck is good against an unsuspecting opponent, or for grinding AIs with. The rushing damage is good against stalls, and the draw denial is great against a rush. This rainbow deck could be the million in one chance you get to finally beat that one AI you couldn't beat before.

Weaknesses: With only 6 quanta producers, it could be hard to draw one in a 30 card deck, which in then turn can slow down the deck. Bad hands can lead to bad consequences. With no hard CC, this deck can easily break in half. 

This deck is an interesting way to experiment with rainbows and brings you one step closer to understanding what goes good in a rainbow whilst being fun and effective.
[hr][hr]

[center][IMG]http://i.imgur.com/RMJj4mM.png[/img][/center]

[center][size=18pt][url=http://elementscommunity.org/forum/level-3-anvil/ricochet-ricochet/]Ricochet | Ricochet[/url][/size][/center]
[center][size=8pt]This Card review was written by [user]Hyroen[/user][/size][/center]

[center][img]http://i.imgur.com/ox609.png[/img] [img]http://i.imgur.com/0WjNy.png[/img][/center]

[spoiler=oEtG Version]
[b][url=http://elementscommunity.org/forum/general-discussion/openetg/]oEtG[/url] Version[/b]
[img width=145]http://i.imgur.com/1TtxWCY.png[/img][img]http://elementscommunity.org/images/Cards/Upgrade.png[/img][img width=145]http://i.imgur.com/y8i7IQC.png[/img]

Art by: [user]Ravizant[/user]: [url=http://etg.dek.im/Cards/4vt.png][b]ART[/b][/url][/spoiler]

Ricochet is an elegant, thematic and balanced idea designed by one of the more prominent card designers of the community, [user]EvaRia[/user]. At home, in the element of :entropy Entropy, Ricochet is a permanent that allows a player to capitalize either on the high risk/high reward nature of some spells such as Parallel Universe or through gaining benefit from harmful effects through a Voodoo Doll deck.

Part of Ricochet's interesting design comes from the fact that it seems to be the card that creates the seamless transformation from Chaos Seed to Pandemonium and in this, lies its power. It harnesses the power of truly making a spell more random, while capitalizing on a spell targeting on more than one target in order to have great effect. In this, however, it receives the greatest benefits from being in a Duo deck with a primary spell, in order to have some control and tame the wild Ricochet. While one might think that in a Mono :entropy Entropy deck, Ricochet could shine with Antimatter, don't forget what happens when you target the same creature with Antimatter twice!!

[hr]
[b]Control[/b]
As Ricochet adapts to the spells in the deck, any Duo deck that uses bolts is able to use them to both bolt the enemy and use them as Creature Control. Furthermore, Ricochet stacks and thus, if you'd like to use cards that have stacking effects such as Basilisk Blood, Ricochet presents the opportunity to use 1 card to have the same effect, multiple times on one target.

[b]Support[/b]
Similarly, as Ricochet adapts to the spells that are in the deck, buffs can easily be used to great effect in particular decks, especially as Ricochet can have spells reapply on the same target. As an example, it can be used in a Duo :aether Aether / :entropy Entropy deck using Shards of Wisdom to power up as many Phase Dragons as possible, as many times as possible, while making sure you get the most out of Ricochet's erratic nature.
[hr]

Here is a deck designed and tested by [user]Hyroen[/user] that shows a combo with Ricochet! 

Deck 1: 
[deck]ric ric ric ric 7ac 7ac 7ac 7ac 7ac 7ac 7ac 7ae 7ae 7ae 7ae 7ae 7ae 7ai 7ai 7ai 7ap 7ap 7ap 7ap 7ap 7ap 7bu 7bu 7bu 7bu 8pj[/deck]
(ric's represent Ricochet)
[hr]
oEtG Code:
046ud077ac047bu037ai067ae067ap018pj

Mitosis itself as a card can be a bit slow at times. To help it really pick up speed, in this deck it is used alongside a splash of :entropy Entropy and Ricochet in order to capitalize on the cheap cost of Giant Frog, while potentially 'soft-lobotomizing' enemy creatures and leaving the opponent quanta starved, especially due to AI attempting to always activate Mitosis whenever there is enough quanta, nearly guaranteeing a more efficient, consistent increase of one's attack:quanta investment ratio compared to that of the opponent. 

Unfortunately however, while the deck does gain benefit from Ricochet, it makes the frogs really vulnerable to single-target creature control, as a single spell could be in essence a Rain of Fire. This is why it is crucial to focus on Mitosis on the primary source of creature generation while using Mitosis from hand when there are enough "readied" frogs who could instantaneously gain benefit from a Mitosis applied to an ally. 

It is important to note that compared to the original version, the oEtG version decreased the cost by 1 :entropy for both the standard and upgraded versions of the card while also adding the clause that the caster is randomized, adding even more to the chaotic nature of the card. With testing through this deck however, it seems to even in its oEtG iteration to sometimes be more of a hindrance than a help, however it may be very difficult to justify lowering its cost even further. 

[hr]

Ricochet is a beautiful card not only because it captures the essence of what :entropy Entropy is, but because it adds more sleek and shiny tools to its arsenal. It is a card that harkens back to a time where card design was a little more focused and inspired simple yet elegant designs. Ricochet deserves to be the Card Idea of the Month because it has long been admired as one of the better designed cards of CI&A and because it is currently a part of [b][url=http://elementscommunity.org/forum/general-discussion/openetg/]oEtG[/url][/b].

To view more of EvaRia's work, click [url=http://elementscommunity.org/forum/portfolio/evaria's-portfolio-11-cards/][b]HERE[/b][/url]. You may be familiar with one card in particular...
[hr][hr]


[spoiler=Photocredit]
[list]
[li]Top image
[spoiler]http://www.sss007.com/kuanzhishidian/2015/0714/4794.html[/spoiler][/li]

[li]PvP Events
[spoiler]http://abstract.desktopnexus.com/wallpaper/50311/[/spoiler][/li]

[li]Name of picture
[spoiler]Url goes here[/spoiler][/li]

[li]PvP Tournaments
[spoiler]http://www.weekendnotes.com/im/003/03/batman-21.jpg[/spoiler][/li]

[li]Leagues
[spoiler]http://millvalleytrophies.com/[/spoiler][/li]

[li]Forum Games
[spoiler]http://www.themodernnomad.com/life-as-a-board-game/[/spoiler][/li]

[li]New Members
[spoiler]http://49.media.tumblr.com/b59742ebc21ccf853e9417a511284136/tumblr_nxehw3e4dr1rc7zl1o3_400.gif[/spoiler][/li]


[/list]
[/spoiler]
[hr][hr]
[size=7pt]Many thanks to:
-[user]Hyroen[/user] for Card idea of the Month.
-[user]MeowMeowCat[/user] for doing small sections and for the interview.
-[user]Silver Emerald[/user] for helping with Weekly Tournament section.
-[user]Zawadx[/user] for Comic Idea and Script and also for proofreaind interview with [user]MeowMeowCat[/user]
-all readers for reading ;)
[/size]
[/td][/tr]
[/table]
[/center]
[/td][/tr]
[/table]
[/spoiler]
</textarea>
				</span>
			</li>
			<br />
			<li class="link"><a id="nl_back" href="edit.php?id=<?php echo $id; ?>">Go Back<br><span class="text">Continue editing the current Newsletter.</span><br></a></li>
			<li class="link"><a id="nl_home" href="index.php">Return Home<br><span class="text">Go back to the Newsletter Index page.</span><br></a></li>
		</ul>
	</body>
</html>