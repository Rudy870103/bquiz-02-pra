<fieldset>
    <legend>新增文章</legend>
    <form action="./api/add_news.php" method="post">
        <table>
            <tr>
                <td>文章標題</td>
                <td><input type="text" name="title" id="title"></td>
            </tr>
            <tr>
                <td>文章分類</td>
                <td>
                    <select name="type" id="type">
                        <option value="one">健康新知</option>
                        <option value="two">菸害防治</option>
                        <option value="three">癌症防治</option>
                        <option value="four">慢性病防治</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>文章內容</td>
                <td><textarea style="width: 400px;height:300px"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </form>
</fieldset>

