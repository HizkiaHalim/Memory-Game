CREATE OR REPLACE PROCEDURE sp_hiz_memory_game_update
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
    in_id                       IN  hiz_memory_game.id%TYPE,
    in_user_id                  IN  hiz_memory_game.user_id%TYPE,
    in_minute                   IN  hiz_memory_game.minute%TYPE,
    in_second                   IN  hiz_memory_game.second%TYPE,
    in_score                    IN  hiz_memory_game.score%TYPE,
    in_move                     IN  hiz_memory_game.move%TYPE,
    in_game_status              IN  hiz_memory_game.game_status%TYPE,
    in_date_finish              IN  hiz_memory_game.date_finish%TYPE,
    in_admin_id                 IN  hiz_memory_game.create_by%TYPE
)
AS
BEGIN
    out_code := 0;
	out_msg := 'OK';

    UPDATE
        HIZ_MEMORY_GAME
    SET
        date_finish = in_date_finish,
        minute = in_minute,
        second = in_second,
        score = in_score,
        move = in_move,
        game_status = in_game_status,
        update_by = in_admin_id,
        update_time = SYSDATE
    WHERE
        id = in_id
        AND user_id = in_user_id
    ;
END;
/

CREATE OR REPLACE PROCEDURE sp_hiz_memory_class_update
(
    out_code			        OUT	NUMBER,
	out_msg				        OUT	VARCHAR2,
    in_id                       IN  hiz_memory_card_class.id%TYPE,
    in_game_id                  IN  hiz_memory_card_class.game_id%TYPE,
    in_class                    IN  hiz_memory_card_class.class%TYPE,
    in_card_value               IN  hiz_memory_card_class.card_value%TYPE,
    in_admin_id                 IN  hiz_memory_card_class.create_by%TYPE
)
AS
BEGIN
    out_code := 0;
	out_msg := 'OK';

    UPDATE
        HIZ_MEMORY_CARD_CLASS
    SET
        class = in_class,
        card_value = in_card_value,
        update_by = in_admin_id,
        update_time = SYSDATE
    WHERE
        id = in_id
        AND game_id = in_game_id
    ;
END;
/