## Cara Push

Push adalah mengirimkan kode dari laptop ke github

-   ```bash
    git add .
    ```
-   ```bash
    git commit -m "tulis pesan disini"
    ```
-   ```bash
    git push origin eksperimen
    ```

## Cara Pull

Pull adalah ambil kode dari github ke laptop

-   ```bash
    git pull
    ```

## Cara Pindah Branch

Pindah branch dari eksperimen ke main

-   ```bash
    git checkout main
    ```

## Cara ambil kode dari eksperimen ke main

Memindahkan kode dari branch eksperimen ke branch main agar update dan kodenya sama

-   Pastikan sudah berada di branch main
-   Lalu ketik perintah dibawah:

    ```bash
    git merge eksperimen
    ```
