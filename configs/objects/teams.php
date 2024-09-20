<?php
	$objects['teams'] = array(
		'meta' => array(
			'access' => ($_SESSION[$session]['usertype'] == 'Administrator'),
			'singular' => 'Team Player',
			'plural' => 'Team Players',
			'table' => 'my_team_players',
			'default_sort_field' => 'id',
			'default_sort_order' => 'desc',
			'add' => false,
			'edit' => false,
			'search' => true,
			'details' => true,
			'delete' => false,
			'fullpage' => false,
			'filter' => "deleted=0" . (intval($_REQUEST['id'])?" and team_id='{$_REQUEST['id']}'":""),
			'row_actions' => array(
				array(
					'link' => "{$server_url}manager/teams?id=ID",
					'title' => 'Team Players',
					'icon' => 'mdi mdi-account-multiple',
					'text' => 'Team Players',
				)
			),
		),
		'fields' => array(
			'team_id' => array(
				'displayname' => 'Team',
				'sort' => true,
				'list' => true,
				'edit' => false,
				'search' => false,
				'details' => true,
				'input' => 'select',
				'options' => DB3::findChildren('my_teams', "name", array(), "deleted=0"),
				'assoc' => true,
				'validation' => 'required',
			),
			'match_id' => array(
				'displayname' => 'Match',
				'sort' => true,
				'list' => true,
				'edit' => false,
				'search' => false,
				'details' => true,
				'input' => 'select',
				'options' => DB3::findChildren('matches', "title", array(), "deleted=0"),
				'assoc' => true,
				'validation' => 'required',
			),
			'userid' => array(
				'displayname' => 'User',
				'sort' => true,
				'list' => true,
				'edit' => false,
				'search' => false,
				'details' => true,
				'input' => 'select',
				'options' => DB3::findChildren('user', "name", array(), "deleted=0"),
				'assoc' => true,
				'validation' => 'required',
			),
			'player_id' => array(
				'displayname' => 'Player Name',
				'sort' => true,
				'list' => true,
				'edit' => false,
				'search' => false,
				'details' => true,
				'input' => 'select',
				'options' => DB3::findChildren('players', "title", array(), "deleted=0"),
				'assoc' => true,
				'validation' => 'required',
			),
			'fantasy_player_rating' => array(
				'displayname' => 'Fantasy Points',
				'sort' => true,
				'list' => true,
				'edit' => false,
				'search' => false,
				'details' => true,
				'input' => 'select',
				'options' => DB3::findChildren('players', "fantasy_player_rating", array(), "deleted=0"),
				'assoc' => true,
				'validation' => 'required',
			),
		)
	)
?>