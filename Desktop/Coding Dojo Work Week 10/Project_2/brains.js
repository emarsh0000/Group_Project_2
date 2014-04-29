function Game_Event()
{

	prompt(Does this thing work?)

	(e.keyCode == 13) "return key"
	.upcase

	if('LOOK' || 'LOOK AT ROOM')
	{
		print "You see a dungeon. There is only one door out and no windows. There are bones in the corner, and a broken pail next to the broken toilet. Eerie music plays from somewhere." + "<br>"
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
	}
	else if ('')
	{
		print "                                                                                                                                                                           " + "<br>"
	}

	else
	{
		print "You can't do that." + "<br>"
	}


}