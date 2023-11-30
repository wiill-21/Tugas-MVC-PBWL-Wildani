<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="user_id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="user_password"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="user_full_name" value="<?php echo $data['row']['user_full_name']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="user_alamat" required><?php echo $data['row']['user_alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>POS</td>
            <td><input type="text" name="user_pos" value="<?php echo $data['row']['user_pos']; ?>" required></td>
        </tr>
        <tr>
            <td>ROLE</td>
            <td>
            <select name="user_role" required>
                <option value="1" <?php echo ($data['row']['user_role'] == 'user') ? 'selected' : ''; ?>>User</option>
                <option value="0" <?php echo ($data['row']['user_role'] == 'pelanggan') ? 'selected' : ''; ?>>Pelanggan</option>
            </select>
            </td>
         </tr>

        <tr>
             <td>STATUS AKTIF</td>
        <td>
            <select name="user_aktif" required>
                <option value="1" <?php echo ($data['row']['user_aktif'] == 1) ? 'selected' : ''; ?>>Aktif</option>
                <option value="0" <?php echo ($data['row']['user_aktif'] == 0) ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
        </td>
         </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
