<?php


class role
{
    private int $id;
    private string $roleNeme;

    /**
     * role constructor.
     * @param string $roleNeme
     */
    public function __construct(string $roleNeme)
    {

        $this->roleNeme = $roleNeme;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    private function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getRoleNeme(): string
    {
        return $this->roleNeme;
    }

    /**
     * @param string $roleNeme
     */
    public function setRoleNeme(string $roleNeme): void
    {
        $this->roleNeme = $roleNeme;
    }


}