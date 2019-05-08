@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form method="POST">

                    {{ csrf_field() }}
                    <h3>Header Stats</h3>
                    Name<input type="text" name="name" id="name"><br>
                    AC<input type="number" name="ac" id="ac"><br>
                    Class<select name="class">
                        <option value="Rogue">Rogue</option>
                        <option value="Wizard">Wizard</option>
                        <option value="Fighter">Fighter</option>
                        <option value="Warrior">Warrior</option>
                        <option value="Sorcerer">Sorcerer</option>
                        <option value="Barbarian">Barbarian</option>
                        <option value="Mystic">Mystic</option>
                        <option value="Artificer">Artificer</option>
                        <option value="Monk">Monk</option>
                        <option value="Warlock">Warlock</option>
                        <option value="Bard">Bard</option>
                        <option value="Ranger">Ranger</option>
                        <option value="Cleric">Cleric</option>
                        <option value="Druid">Druid</option>
                        <option value="Paladin">Paladin</option>
                    </select><br>
                    Level<input type="number" name="level" id="level"><br>
                    Hit Points<input type="number" name="hp" id="hp"><br>
                    <h3>Stats</h3><br>
                    STRENGTH<input type="number" name="str" id="str"><br>
                    DEXTERITY<input type="number" name="dex" id="dex"><br>
                    CONSTITUTION<input type="number" name="con" id="con"><br>
                    INTELLIGENCE<input type="number" name="int" id="int"><br>
                    WISDOM<input type="number" name="wis" id="wis"><br>
                    CHARISMA<input type="number" name="cha" id="cha"><br>
                    <h3>Saving Throws</h3><br>
                    STR<select name="st_str">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    DEX<select name="st_dex">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    CON<select name="st_con">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    INT<select name="st_int">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    WIS<select name="st_wis">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>
                    CHA<select name="st_cha">
                        <option value="0">None</option>
                        <option value="1">Proficency</option>
                    </select><br>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection