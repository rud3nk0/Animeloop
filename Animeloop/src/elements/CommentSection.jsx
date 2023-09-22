import React, {Component} from 'react';
import "./CommentSection.css"
class CommentSection extends Component {


    constructor(props) {
        super(props);
        this.state = {
            comments: [], // массив для хранения комментариев
            newCommentText: '', // текст нового комментария
        };
    }

    // Обработчик изменения текста нового комментария
    handleNewCommentChange = (e) => {
        this.setState({ newCommentText: e.target.value });
    };

    // Обработчик добавления нового комментария
    handleAddComment = () => {
        const { comments, newCommentText } = this.state;
        if (newCommentText.trim() !== '') {
            // Создаем новый комментарий
            const newComment = {
                text: newCommentText,
                // Другие поля комментария, если необходимо
            };

            // Обновляем состояние, добавляя новый комментарий в массив
            this.setState({
                comments: [...comments, newComment],
                newCommentText: '', // Очищаем поле ввода
            });
        }
    };

    render() {
        const { comments, newCommentText } = this.state;

        return (
            <div className="comment_section">
                <h2 className="title">Комментарии</h2>
                    <div className="comment_input_area">
                        <textarea
                            className="comment_text_area"
                            value={newCommentText}
                            onChange={this.handleNewCommentChange}
                            placeholder="Введите комментарий"
                        />

                    </div>
                <button className="comment_button" onClick={this.handleAddComment}>Добавить комментарий</button>

                <hr/>

                    <div>
                        {comments.map((comment, index) => (
                            <div key={index}>
                                <p className="comment_text_show">{comment.text}</p>
                            </div>
                        ))}
                    </div>
            </div>
        );
    }
}

export default CommentSection;
