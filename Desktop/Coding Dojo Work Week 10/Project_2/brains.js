function Game_Event()
{

	prompt(Does this thing work?)

	(e.keyCode == 13) "return key"
	.upcase

	if('LOOK' || 'LOOK AT ROOM')
	{
		print "You see a dungeon. There is only one door out and no windows. There are bones in the corner, and a broken pail next to the dirty toilet. Eerie music plays from somewhere." + "<br>"
	}
	else if ('LOOK AT DOOR')
	{
		print "The door is big, heavy, and locked." + "<br>"
	}
	else if ('LOOK AT TOILET')
	{
		print "It's gross. I wouldn't go near it." + "<br>"
	}
	else if ('OPEN DOOR' || "OPEN THE DOOR" || "TURN DOOR HANDLE" || "TRY DOOR")
	{
		print "The Door is locked. You didn't think it would be THAT easy did you?" + "<br>"
	}
	else if ('TAKE BONES' || 'GRAB BONES' || 'PICK UP BONES' || 'PICK UP BONE' || 'TAKE A BONE' || 'GRAB A BONE')
	{
		print "Ooh! Gross! You gingerly try to grab a long leg bone in the pile. It has a sharp, broken edge. Congrats, now you have a gross bone." + "<br>"
	}
	else if ('LOOK AT BONES' || 'LOOK AT THE BONES')
	{
		print "There are a pile of the bones in the corner. Ew, they look like the bones of not-so-fortunate past players." + "<br>"
	}
	else if ('TAKE BUCKET' || 'GRAB BUCKET' || 'PICK UP BUCKET' || 'PICK UP THE BUCKET' || 'TAKE THE BUCKET' || 'GRAB THE BUCKET')
	{
		print "The bucket breaks to pieces in your hands. The rope is slimy but intact. Kind of long for a bucket rope, must've been from a well at one time." + "<br>"
	}
	else if ('TAKE ROPE' || 'GRAB ROPE' || 'PICK UP ROPE' || 'PICK UP THE ROPE' || 'TAKE THE ROPE' || 'GRAB THE ROPE')
	{
		print "You pick up the rope. This may come in handy." + "<br>"
	}
	else if ('LOOK AT WALL')
	{
		print "The wall is old and craggly. bits of pebbles and rocks litter the floor." + "<br>"
	}
	else if ('TAKE PEBBLES' || 'GRAB PEBBLES' || 'PICK UP PEBBLES' || 'PICK UP THE PEBBLES' || 'TAKE THE PEBBLES' || 'GRAB THE PEBBLES' || 'TAKE A PEBBLE' || 'GRAB A PEBBLE' || 'PICK UP PEBBLE' || 'PICK UP A PEBBLE')
	{
		print "You add some dirty pebbles to the lint in your pocket."	+ "<br>"	
	}
	else if ('OPEN DOOR WITH BONE' || 'OPEN THE DOOR WITH THE BONE' || 'USE BONE ON DOOR' || 'USE BONE ON LOCK')
	{
		print "With the broken bone, you jigger the sharp piece into the lock and it clicks open and falls off. You're FREE! The door creaks open showing you a dark hallway." + "<br>"
		print "You enter a dark hallway. There appears to be no guards around right now. Lucky you." + "<br>"
	}
	else if ('WALK THROUGH HALLWAY' || 'EXIT HALLWAY' || 'WALK FORWARD' || 'GO FORWARD' || 'LEAVE HALLWAY')
	{
		print "You enter the guard's room. There are 3 guards sleeping with some weapons around them. On the table is a pitcher." + "<br>"
	}
	else if ('LOOK AT WEAPONS')
	{
		print "There seems to be an ax, some arrows, and each soldier has a sword." + "<br>"
	}
	else if ('TAKE PITCHER' || 'GRAB PITCHER')
	{
		print "The pitcher is slippery! It falls from your hand and crashes in pieces on the ground, waking the guards!" + "<br>"
	}
	else if ('THROW PEBBLES' || 'USE PEBBLES')
	{
		print "The guards come after you but the PEBBLES you throw act like marbles and the guards trip and knock themselves out. Quick thinking!" + "<br>"
	}
	else if ('TAKE ARROWS' || 'TAKE ARROW' || 'GRAB ARROWS' || 'GRAB ARROW' || 'PICK UP ARROWS' || 'PICK UP ARROW' || 'PICK UP THE ARROWS' || 'PICK UP THE ARROW')
	{
		print "You grab an ARROW and add it to your stash of items." + "<br>"
	}
	else if ('TAKE AX' || 'TAKE THE AX' || 'GRAB AX' || 'GRAB THE AX' || 'PICK UP AX')
	{
		print "You grab the AX. Now you feel safer." + "<br>"
	}
	else if ('FIGHT GUARDS')
	{
		print "Don't be stupid. There are 3 of them and one of you. Still want to fight?" + "<br>"
		prompt("Want to fight?")
		if ("YES")
		{
			print "You try to fight the guards. They overpower you and you get injured and bleed out. You died. GAME OVER."
		}
	}
	else if ('TAKE SWORD' || 'TAKE A SWORD' || 'GRAB SWORD' || 'GRAB A SWORD' || 'PICK UP SWORD')
	{
		print "Ehh...those are still attched to the guards. Let's be thankful for what we have and get out of here." + "<br>"
	}
	else if ('GO FORWARD' || 'LEAVE ROOM' || 'EXIT' || 'EXIT ROOM')
	{
		print "You are FREE! At least of the jail. You find yourself in a forest. Roads go forward, east, and west." + "<br>"
	}
	else if ('LOOK AROUND' || 'LOOK AT FOREST')
	{
		print "Lots of trees, and 3 paths out of here." + "<br>"
	}
	else if ('CUT TREE')
	{
		print "with what?" + "<br>"
	}
	else if ('USE AX')
	{
		print "on what?" + "<br>"
	}
	else if ('CUT TREE WITH AX' || 'USE AX ON TREE' || 'USE AX TO CUT TREE')
	{
		print "You cut a nice WALKING STICK out of part of a tree trunk. YEA!" + "<br>"
	}
	else if ('USE ARROW ON TREE')
	{
		print "why would you want to get your arrow stuck in a tree truck? Let's rethink this." + "<br>"
	}
	else if ('USE ROPE')
	{
		print "On what?" + "<br>"
	}
	else if ('USE ROPE ON TREE' || 'CLIMB TREE')
	{
		print "You try to climb the tree to see where you are, but the branches are too dense and get too small as the tree gets taller." + "<br>"
	}
	else if ('GO FORWARD' || 'LEAVE FOREST' || 'LEAVE') //must use this for all forest scenes.
	{
		print "You find yourself in front of a tall and smooth wall with no way around or over." + "<br>"
	}
	else if ('GO EAST')
	{
		print "You are walking through the forest when all of a sudden your feet get stuck. OH NO! It's QUICKSAND! You start to sink." + "<br>"
	}
	else if ('GET OUT OF QUICKSAND' || 'ESCAPE QUICKSAND' || 'USE ROPE' || 'USE ARROW' || 'USE AX' || 'USE BONE' || 'LOOK AROUND')
	{
		print "You start to sink quicker. You say goodbye as you sink up to your neck and then head. You died. GAME OVER." + "<br>"
	}
	else if ('USE WALKING STICK')
	{
		print "You grab your walking stick and place it across the quicksand puddle and use it to leverage yourself out of the quicksand. WHEW! That was close." + "<br>" + "Something was stuck to you as you get out of the quicksand. What is this? WHOA! 3 GOLD COINS." + "<br>"
	}
	else if ('GO WEST' || 'LOOK AROUND')
	{
		print "You walk into a nice stretch of forest that has a pretty bridge." + "<br>"
	}
	else if ('LOOK AT BRIDGE' || 'CROSS BRIDGE' || 'EXPLORE BRIDGE')
	{
		print "You walk up to explore when suddenly, an Ogre appears from under the bridge." + "<br>" + "He blocks any escape and says, 'If ye wish to pass on to the lands beyond, answer my question and I shall be gone!'" + "<br>" + "You throw away the outside and cook the inside. Then you eat the outside and throw away the inside. What did you eat?"
		if ('CORN')
		{
			print "The Ogre bows his head in acknowledgment. 'You are correct. I will allow you to pass. And here is an additional reward for you. A past traveler left it and I have no need of it.'" + "<br>" + "The Ogre hands you an old SPELLBOOK. OOH!" + "<br>"
		}
		else
		{
			print "The Ogre reaches for you. 'You are mistaken. LUNCH!' He eats you. GAME OVER." + "<br>"
		}
	}
	else if ('TALK TO OGRE')
	{
		print "'I have no more help to give you at this time. Be gone!' The Ogre climbed back under the bridge." + "<br>"
	}
	else if ('LOOK AT SPELLBOOK' || 'OPEN SPELLBOOK')
	{
		print "You open the dusty tomb. Inside is a spell to create a magical staff." + "<br>" + "'Ingredients needed: Thorns, an item to cast the enchantment on, magical dust, and 1 spider.'" + "<br>"
	}
	else if ('CLIMB WALL' || 'CLIMB THE WALL' || 'GO OVER WALL')
	{
		print "You try to scale the wall, but it's too smooth with no hand holds. You slip and can't make any headway." + "<br>"
	}
	else if ('LOOK AT WALL')
	{
		print "It's a wall. Smooth, no hand holds. Hope that helps." + "<br>"
	}
	else if ('USE AX ON WALL' || 'USE AX ON THE WALL')
	{
		print "You try to hack a hole through the wall, but to no avail." + "<br>"
	}
	else if ('USE ARROW ON WALL' || 'THROW ARROW AT WALL')
	{
		print "There's not much you can do with one arrow. Maybe if you had another." + "<br>"
	}
	else if ('USE ROPE ON WALL' || 'USE ROPE TO CLIMB' || 'THROW ROPE OVER WALL' || 'USE ROPE TO CLIMB WALL' || 'CLIMB ROPE UP WALL' || 'USE ROPE TO CLIMB WALL')
	{
		print "You throw the rope over the tall wall and it snags on something. You climb to the top and discover another arrow! I wonder if this wall was built to keep the Ogre out of the kingdom?" + "<br>"
	}
	else if ('TAKE ARROW' || 'GRAB ARROW' || 'GRAB THE ARROW' || 'TAKE THE ARROW')
	{
		print "Great! Now you have two arrows!" + "<br>"
	}
	else if ('GO FORWARD' || 'LEAVE' || 'LEAVE WALL' || 'GO DOWN WALL')
	{
		print "You come upon a small town. Not many people are around but you see wanted posters with your face on it. You better be careful!" + "<br>"
	}
	else
	{
		print "You can't do that." + "<br>"
	}


}