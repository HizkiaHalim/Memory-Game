CREATE OR REPLACE PROCEDURE sp_hiz_memory_game_insert
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
	out_game_id				    OUT	NUMBER,
    in_user_id                  IN  hiz_memory_game.user_id%TYPE,
    in_cardQty                  IN  hiz_memory_game.cardQty%TYPE,
    in_difficulty               IN  hiz_memory_game.difficulty%TYPE,
    in_admin_id                 IN  hiz_memory_game.create_by%TYPE
)
AS
BEGIN
    out_code := 0;
	out_msg := 'OK';
	out_game_id := seq_hiz_memory_game_id.nextval;

    UPDATE
        HIZ_MEMORY_GAME
    SET
        game_status = 'invalid'
    WHERE
        id = (
            SELECT
                ID
            FROM
                HIZ_MEMORY_GAME
            WHERE
                game_status = 'incomplete'
        )
    ;

    INSERT INTO HIZ_MEMORY_GAME
    (
        id,
        user_id,
        date_start,
        date_finish,
        minute,
        second,
        score,
        cardQty,
        move,
        difficulty,
        game_status,
        create_by,
        create_time,
        status
    )
    VALUES
    (
        out_game_id,
        in_user_id,
        SYSDATE,
        NULL,
        0,
        0,
        0,
        in_cardQty,
        0,
        in_difficulty,
        'incomplete',
        in_admin_id,
        SYSDATE,
        1
    ); 

END;
/

CREATE OR REPLACE PROCEDURE sp_hiz_memory_class_insert
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
    in_game_id                  IN  hiz_memory_card_class.game_id%TYPE,
    in_class                    IN  hiz_memory_card_class.class%TYPE,
    in_admin_id                 IN  hiz_memory_card_class.create_by%TYPE
)
AS
BEGIN
    out_code := 0;
	out_msg := 'OK';

    INSERT INTO HIZ_MEMORY_CARD_CLASS
    (
        id,
        game_id,
        class,
        create_by,
        create_time,
        status
    )
    VALUES
    (
        seq_hiz_memory_class_id.nextval,
        in_game_id,
        in_class,
        in_admin_id,
        SYSDATE,
        1
    );

END;
/

CREATE OR REPLACE PROCEDURE sp_hiz_memory_move_insert
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
    in_game_id                  IN  hiz_memory_move_dict.game_id%TYPE,
    in_move                     IN  hiz_memory_move_dict.move%TYPE,
    in_admin_id                 IN  hiz_memory_card_class.create_by%TYPE
)
AS
BEGIN
    out_code := 0;
	out_msg := 'OK';

    INSERT INTO HIZ_MEMORY_MOVE_DICT
    (
        id,
        game_id,
        move,
        create_by,
        create_time,
        status
    )
    VALUES
    (
        seq_hiz_memory_move_id.nextval,
        in_game_id,
        in_move,
        in_admin_id,
        SYSDATE,
        1
    );
END;
/

DECLARE
    outCode NUMBER;
    outMsg VARCHAR2(4000);
    out_id NUMBER;
BEGIN
    sp_hiz_memory_game_insert
    (
        out_code		            => outCode,
        out_msg			            => outMsg,
        out_id			            => outId,
        in_user_id                  => '1',
        in_cardQty                  => '6',
        in_difficulty               => 'easy',
        in_admin_id 	            => '1'
    );
    dbms_output.put_line(outCode);
    dbms_output.put_line(outMsg);
    dbms_output.put_line(outId);
END;
/
